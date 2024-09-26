<?php

namespace App\Entity;

use App\Repository\ParticipationsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParticipationsRepository::class)]
class Participations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbrParticipants = null;

    #[ORM\ManyToOne(inversedBy: 'participationEvent')]
    private ?User $userInscrit = null;

    #[ORM\ManyToOne(inversedBy: 'participationsEvenement')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Evenement $evenementInscrit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbrParticipants(): ?int
    {
        return $this->nbrParticipants;
    }

    public function setNbrParticipants(?int $nbrParticipants): static
    {
        $this->nbrParticipants = $nbrParticipants;

        return $this;
    }

    public function getUserInscrit(): ?User
    {
        return $this->userInscrit;
    }

    public function setUserInscrit(?User $userInscrit): static
    {
        $this->userInscrit = $userInscrit;

        return $this;
    }

    public function getEvenementInscrit(): ?Evenement
    {
        return $this->evenementInscrit;
    }

    public function setEvenementInscrit(?Evenement $evenementInscrit): static
    {
        $this->evenementInscrit = $evenementInscrit;

        return $this;
    }

    public function __toString()
    {
        return $this->userInscrit;
    }
}
