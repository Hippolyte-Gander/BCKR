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

    #[ORM\ManyToOne(inversedBy: 'participationsEvenement')]
    private ?User $inscrit = null;

    #[ORM\ManyToOne(inversedBy: 'participations')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Evenement $inscriptions = null;

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

    public function getInscrit(): ?User
    {
        return $this->inscrit;
    }

    public function setInscrit(?User $inscrit): static
    {
        $this->inscrit = $inscrit;

        return $this;
    }

    public function getInscriptions(): ?Evenement
    {
        return $this->inscriptions;
    }

    public function setInscriptions(?Evenement $inscriptions): static
    {
        $this->inscriptions = $inscriptions;

        return $this;
    }
}
