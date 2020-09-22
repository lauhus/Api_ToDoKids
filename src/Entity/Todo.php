<?php

namespace App\Entity;

use App\Repository\TodoRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=TodoRepository::class)
 * @ApiResource(
 *     normalizationContext={"groups"={"read:family"}})
 */
class Todo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("read:family")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("read:family")
     */
    private $nature_todo;

    /**
     * @ORM\Column(type="date")
     * @Groups("read:family")
     */
    private $date_todo;

    /**
     * @ORM\Column(type="boolean")
     * @Groups("read:family")
     */
    private $checked;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups("read:family")
     */
    private $message_todo;

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
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="Todo")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNatureTodo(): ?string
    {
        return $this->nature_todo;
    }

    public function setNatureTodo(string $nature_todo): self
    {
        $this->nature_todo = $nature_todo;

        return $this;
    }

    public function getDateTodo(): ?\DateTimeInterface
    {
        return $this->date_todo;
    }

    public function setDateTodo(\DateTimeInterface $date_todo): self
    {
        $this->date_todo = $date_todo;

        return $this;
    }

    public function getChecked(): ?bool
    {
        return $this->checked;
    }

    public function setChecked(bool $checked): self
    {
        $this->checked = $checked;

        return $this;
    }

    public function getMessageTodo(): ?string
    {
        return $this->message_todo;
    }

    public function setMessageTodo(?string $message_todo): self
    {
        $this->message_todo = $message_todo;

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
