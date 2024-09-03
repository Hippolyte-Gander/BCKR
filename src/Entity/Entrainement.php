<?php

namespace App\Entity;

use App\Repository\EntrainementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntrainementRepository::class)]
class Entrainement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    /**
     * @var Collection<int, ParticipantEntrainement>
     */
    #[ORM\OneToMany(targetEntity: ParticipantEntrainement::class, mappedBy: 'entrainement')]
    private Collection $participantEntrainements;

    public function __construct()
    {
        $this->participantEntrainements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
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
            $participantEntrainement->setEntrainement($this);
        }

        return $this;
    }

    public function removeParticipantEntrainement(ParticipantEntrainement $participantEntrainement): static
    {
        if ($this->participantEntrainements->removeElement($participantEntrainement)) {
            // set the owning side to null (unless already changed)
            if ($participantEntrainement->getEntrainement() === $this) {
                $participantEntrainement->setEntrainement(null);
            }
        }

        return $this;
    }
}
