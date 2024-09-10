<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

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
    private ?string $photo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $cp = null;

    /**
     * @var Collection<int, Participations>
     */
    #[ORM\OneToMany(targetEntity: Participations::class, mappedBy: 'inscrit')]
    private Collection $participationsEvenement;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
        $this->participantEntrainements = new ArrayCollection();
        $this->participationsEvenement = new ArrayCollection();
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


    // ========================== AJOUT INFOS MEMBRE ==========================
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

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): static
    {
        $this->photo = $photo;

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

    // Date de naissance format jj/mm/aaaa
    public function dateNaissanceFormatee(): ?string
    {
        return $this->dateNaissance->format('d/m/Y');
    }

    /**
     * @return Collection<int, Participations>
     */
    public function getParticipationsEvenement(): Collection
    {
        return $this->participationsEvenement;
    }

    public function addParticipationsEvenement(Participations $participationsEvenement): static
    {
        if (!$this->participationsEvenement->contains($participationsEvenement)) {
            $this->participationsEvenement->add($participationsEvenement);
            $participationsEvenement->setInscrit($this);
        }

        return $this;
    }

    public function removeParticipationsEvenement(Participations $participationsEvenement): static
    {
        if ($this->participationsEvenement->removeElement($participationsEvenement)) {
            // set the owning side to null (unless already changed)
            if ($participationsEvenement->getInscrit() === $this) {
                $participationsEvenement->setInscrit(null);
            }
        }

        return $this;
    }
}
