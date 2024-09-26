<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column]
    private bool $isVerified = false;

    #[ORM\Column(length: 255)]
    private ?string $pseudo = null;

    /**
     * @var Collection<int, Commentaire>
     */
    #[ORM\OneToMany(targetEntity: Commentaire::class, mappedBy: 'poste')]
    private Collection $commentaires;

    /**
     * @var Collection<int, ParticipantEntrainement>
     */
    #[ORM\OneToMany(targetEntity: ParticipantEntrainement::class, mappedBy: 'utilisateur')]
    private Collection $participantEntrainements;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $numLicence = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $numTelephone = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $dateNaissance = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photoProfil = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $cp = null;

    /**
     * @var Collection<int, Participations>
     */
    #[ORM\OneToMany(targetEntity: Participations::class, mappedBy: 'userInscrit')]
    private Collection $participationEvent;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
        $this->participantEntrainements = new ArrayCollection();
        $this->participationEvent = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->pseudo;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     *
     * @return list<string>
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setVerified(bool $isVerified): static
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): static
    {
        $this->pseudo = $pseudo;

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
            $commentaire->setPoste($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): static
    {
        if ($this->commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getPoste() === $this) {
                $commentaire->setPoste(null);
            }
        }

        return $this;
    }

    // vérifier si l'utilisateur est un membre
    public function isMembre(): bool
    {
        return in_array('ROLE_MEMBRE', $this->getRoles());
    }

    // vérifier si l'utilisateur est un admin
    public function isAdmin(): bool
    {
        return in_array('ROLE_ADMIN', $this->getRoles());
    }

    /**
     * @return Collection<int, ParticipantEntrainement>
     */
    public function getParticipantEntrainements(): Collection
    {
        return $this->participantEntrainements;
    }

    public function addParticipantEntrainement(ParticipantEntrainement $participantEntrainement): static
    {
        if (!$this->participantEntrainements->contains($participantEntrainement)) {
            $this->participantEntrainements->add($participantEntrainement);
            $participantEntrainement->setUtilisateur($this);
        }

        return $this;
    }

    public function removeParticipantEntrainement(ParticipantEntrainement $participantEntrainement): static
    {
        if ($this->participantEntrainements->removeElement($participantEntrainement)) {
            // set the owning side to null (unless already changed)
            if ($participantEntrainement->getUtilisateur() === $this) {
                $participantEntrainement->setUtilisateur(null);
            }
        }

        return $this;
    }


    // ========================== INFOS MEMBRE ==========================
    public function getNumLicence(): ?string
    {
        return $this->numLicence;
    }

    public function setNumLicence(?string $numLicence): static
    {
        $this->numLicence = $numLicence;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNumTelephone(): ?string
    {
        return $this->numTelephone;
    }

    public function setNumTelephone(?string $numTelephone): static
    {
        $this->numTelephone = $numTelephone;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeImmutable
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(?\DateTimeImmutable $dateNaissance): static
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getPhotoProfil(): ?string
    {
        return $this->photoProfil;
    }

    public function setPhotoProfil(?string $photoProfil): static
    {
        $this->photoProfil = $photoProfil;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(?string $cp): static
    {
        $this->cp = $cp;

        return $this;
    }
    
    /**
     * @return Collection<int, Participations>
     */
    public function getParticipationEvent(): Collection
    {
        return $this->participationEvent;
    }

    // Date de naissance format jj/mm/aaaa
    public function dateNaissanceFormatee(): ?string
    {
        return $this->dateNaissance->format('d/m/Y');
    }


    public function addParticipationEvent(Participations $participationEvent): static
    {
        if (!$this->participationEvent->contains($participationEvent)) {
            $this->participationEvent->add($participationEvent);
            $participationEvent->setUserInscrit($this);
        }

        return $this;
    }

    public function removeParticipationEvent(Participations $participationEvent): static
    {
        if ($this->participationEvent->removeElement($participationEvent)) {
            // set the owning side to null (unless already changed)
            if ($participationEvent->getUserInscrit() === $this) {
                $participationEvent->setUserInscrit(null);
            }
        }

        return $this;
    }

    // Vérifier si utilisateur participe déjà à l'événement
    public function estCeQueParticipeDeja(Evenement $evenement): bool
    {
        $events = [];
        foreach($this->participationEvent as $p) {
            $events[] = $p->getEvenementInscrit();
        }
        return $response = in_array($evenement, $events);
    }

    // Vérifier si utilisateur a des infos perso
    public function aInfosPerso(): bool
    {
        if ($this->nom || $this->prenom || $this->numTelephone || $this->numLicence || $this->dateNaissance || $this->adresse || $this->ville || $this->cp) {
            return true;
        } else {
            return false;
        }
    }

}
