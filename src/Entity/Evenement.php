<?php

namespace App\Entity;

use App\Entity\User;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\Id;
use Symfony\Component\Security\Core\User\UserInterface;

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

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateFin = null;

    /**
     * @var Collection<int, Commentaire>
     */
    #[ORM\OneToMany(targetEntity: Commentaire::class, mappedBy: 'appartient')]
    private Collection $commentaires;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $visibilite = null;

    #[ORM\Column]
    private ?int $places = null;

    /**
     * @var Collection<int, User>
     */
    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'participe')]
    private Collection $participants;

    #[ORM\Column(nullable: true)]
    private ?int $placesPrises = 0;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
        $this->participants = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->titre ?: '';
    }

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

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
        
    public function getPlacesPrises(): ?int
    {
        return $this->placesPrises;
    }

    public function setPlacesPrises(?int $placesPrises): static
    {
        $this->placesPrises = $placesPrises;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getParticipants(): Collection
    {
        return $this->participants;
    }

    public function addParticipant(User $participant): static
    {
        if (!$this->participants->contains($participant)) {
            $this->participants->add($participant);
            $participant->addParticipe($this);
        }

        return $this;
    }

    public function removeParticipant(User $participant): static
    {
        if ($this->participants->removeElement($participant)) {
            $participant->removeParticipe($this);
        }

        return $this;
    }

    
    // Dates formatées

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

    // compteur de places

    public function placesPriseEvenement()
    {
        if ($this->placesPrises < $this->places) {
            $this->placesPrises += 1;
        };
        return $this;
    }

    public function placesDesisteeEvenement()
    {
        if ($this->placesPrises < $this->places) {
            $this->placesPrises -= 1;
        };
        return $this;
    }

}
