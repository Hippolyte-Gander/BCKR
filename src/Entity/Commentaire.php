<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datePoste = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $message = null;

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?User $poste = null;

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?Evenement $appartient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatePoste(): ?\DateTimeInterface
    {
        return $this->datePoste;
    }

    public function setDatePoste(\DateTimeInterface $datePoste): static
    {
        $this->datePoste = $datePoste;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getPoste(): ?User
    {
        return $this->poste;
    }

    public function setPoste(?User $poste): static
    {
        $this->poste = $poste;

        return $this;
    }

    public function getAppartient(): ?Evenement
    {
        return $this->appartient;
    }

    public function setAppartient(?Evenement $appartient): static
    {
        $this->appartient = $appartient;

        return $this;
    }
}
