<?php

namespace App\Entity;

use Assert\NotNull;
use App\Entity\User;
use Vich\UploadableField;
use Doctrine\ORM\Mapping\Id;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $contenu = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotNull(message: 'Veuillez saisir une date de début.')]
    #[Assert\GreaterThanOrEqual("tomorrow", message: 'La date de  début doit être à partir de demain.')]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[NotNull(message: 'Veuillez saisir une date de fin.')]
    #[Callback([self::class, 'validateDateFin'])]
    private ?\DateTimeInterface $dateFin = null;

    /**
     * @var Collection<int, Commentaire>
     */
    #[ORM\OneToMany(targetEntity: Commentaire::class, mappedBy: 'appartient', orphanRemoval:true, cascade:['persist'])]
    private Collection $commentaires;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $visibilite = null;

    #[ORM\Column]
    private ?int $places = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $affiche = null;

    #[UploadableField(mapping: 'afficheEvenement', fileNameProperty: 'afficheName', size: 'afficheSize')]
    private ?File $afficheFile = null;

    #[ORM\Column(nullable: true)]
    private ?string $afficheName = null;

    #[ORM\Column(nullable: true)]
    private ?int $afficheSize = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    /**
     * @var Collection<int, Participations>
     */
    #[ORM\OneToMany(targetEntity: Participations::class, mappedBy: 'inscriptions', orphanRemoval: true)]
    private Collection $participations;

    /**
     * @var Collection<int, ImageEvenement>
     */
    #[ORM\OneToMany(targetEntity: ImageEvenement::class, mappedBy: 'evenement', cascade: ['persist'], orphanRemoval: true)]
    private Collection $imagesEvenement;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
        $this->participations = new ArrayCollection();
        $this->imagesEvenement = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->titre ?: '';
    }
    // ==================================== Début get et set ====================================
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): static
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): static
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * @return Collection<int, Commentaire>
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function getVisibilite(): ?string
    {
        return $this->visibilite;
    }

    public function setVisibilite(?string $visibilite): static
    {
        $this->visibilite = $visibilite;

        return $this;
    }

    public function getPlaces(): ?int
    {
        return $this->places;
    }

    public function setPlaces(int $places): static
    {
        $this->places = $places;

        return $this;
    }
        
    /**
     * @return Collection<int, Participations>
     */
    public function getParticipations(): Collection
    {
        return $this->participations;
    }

    // ==================================== Fin get et set ====================================


    // =============== Add / remove commentaire ===============

    public function addCommentaire(Commentaire $commentaire): static
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires->add($commentaire);
            $commentaire->setAppartient($this);
        }

        return $this;
    }


    public function removeCommentaire(Commentaire $commentaire): static
    {
        if ($this->commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getAppartient() === $this) {
                $commentaire->setAppartient(null);
            }
        }

        return $this;
    }

    // =============== Validation dates ===============

    public static function validateDateFin(?\DateTimeInterface $dateFin, ExecutionContextInterface $context)
    {
        $object = $context->getObject(); // Access the current Evenement object
        $dateDebut = $object->getDateDebut();

        if ($dateFin !== null && $dateDebut !== null && $dateFin <= $dateDebut) {
            $context->buildViolation('The end date must be after the start date.')
                ->atPath('dateFin')
                ->addViolation();
        }
    }

    // =============== Dates formatées ===============

    public function dateDebutFormatee(): ?string
    {
        return $this->dateDebut->format('d/m/Y');
    }
    
    public function heureDebutFormatee(): ?string
    {
        return $this->dateDebut->format('H:i');
    }

    public function dateFinFormatee(): ?string
    {
        return $this->dateFin->format('d/m/Y');
    }

    public function heureFinFormatee(): ?string
    {
        return $this->dateFin->format('H:i');
    }

    // =============== ADD / REMOVE Participations ===============

    public function addParticipation(Participations $participation): static
    {
        if (!$this->participations->contains($participation)) {
            $this->participations->add($participation);
            $participation->setInscriptions($this);
        }

        return $this;
    }

    public function removeParticipation(Participations $participation): static
    {
        if ($this->participations->removeElement($participation)) {
            // set the owning side to null (unless already changed)
            if ($participation->getInscriptions() === $this) {
                $participation->setInscriptions(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ImageEvenement>
     */
    public function getImagesEvenement(): Collection
    {
        return $this->imagesEvenement;
    }

    public function addImagesEvenement(ImageEvenement $imagesEvenement): static
    {
        if (!$this->imagesEvenement->contains($imagesEvenement)) {
            $this->imagesEvenement->add($imagesEvenement);
            $imagesEvenement->setEvenement($this);
        }

        return $this;
    }

    public function removeImagesEvenement(ImageEvenement $imagesEvenement): static
    {
        if ($this->imagesEvenement->removeElement($imagesEvenement)) {
            // set the owning side to null (unless already changed)
            if ($imagesEvenement->getEvenement() === $this) {
                $imagesEvenement->setEvenement(null);
            }
        }

        return $this;
    }

    public function getAfficheName(): ?string
    {
        return $this->afficheName;
    }

    public function setAfficheName(?string $afficheName): void
    {
        $this->afficheName = $afficheName;
    }
    
    public function getAfficheFile(): ?File
    {
        return $this->afficheFile;
    }

    public function setAfficheFile($afficheFile = null): void
    {
        $this->afficheFile = $afficheFile;

        if (null !== $afficheFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getAfficheSize(): ?int
    {
        return $this->afficheSize;
    }

    public function setAfficheSize($afficheSize)
    {
        $this->afficheSize = $afficheSize;

        return $this;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt($updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    // =============== gérer nombre de Participations ===============
    public function getTotalParticipants(): int
    {
        $totalParticipants = 0;

        foreach ($this->participations as $participation) {
            $totalParticipants += $participation->getNbrParticipants();
        }

        return $totalParticipants;
    }

    public function getNbrPlacesDisponibles(): int
    {
        return $this->getPlaces() - $this->getTotalParticipants();
    }
}
