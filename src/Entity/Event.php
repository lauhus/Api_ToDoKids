<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EventRepository::class)
 */
class Event
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nature_event;

    /**
     * @ORM\Column(type="date")
     */
    private $date_event;

    /**
     * @ORM\Column(type="time")
     */
    private $start_event;

    /**
     * @ORM\Column(type="time")
     */
    private $end_event;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $message_event;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $created_by;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $updated_by;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="Event")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNatureEvent(): ?string
    {
        return $this->nature_event;
    }

    public function setNatureEvent(string $nature_event): self
    {
        $this->nature_event = $nature_event;

        return $this;
    }

    public function getDateEvent(): ?\DateTimeInterface
    {
        return $this->date_event;
    }

    public function setDateEvent(\DateTimeInterface $date_event): self
    {
        $this->date_event = $date_event;

        return $this;
    }

    public function getStartEvent(): ?\DateTimeInterface
    {
        return $this->start_event;
    }

    public function setStartEvent(\DateTimeInterface $start_event): self
    {
        $this->start_event = $start_event;

        return $this;
    }

    public function getEndEvent(): ?\DateTimeInterface
    {
        return $this->end_event;
    }

    public function setEndEvent(\DateTimeInterface $end_event): self
    {
        $this->end_event = $end_event;

        return $this;
    }

    public function getMessageEvent(): ?string
    {
        return $this->message_event;
    }

    public function setMessageEvent(?string $message_event): self
    {
        $this->message_event = $message_event;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->created_by;
    }

    public function setCreatedBy(string $created_by): self
    {
        $this->created_by = $created_by;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getUpdatedBy(): ?string
    {
        return $this->updated_by;
    }

    public function setUpdatedBy(string $updated_by): self
    {
        $this->updated_by = $updated_by;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
