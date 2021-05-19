<?php

namespace App\Entity;

use App\Repository\TeacherRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TeacherRepository::class)
 */
class Teacher
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=User::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $relatedUser;

    /**
     * @ORM\ManyToMany(targetEntity=TeacherType::class, mappedBy="teachers")
     */
    private $types;

    public function __construct()
    {
        $this->types = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRelatedUser(): ?User
    {
        return $this->relatedUser;
    }

    public function setRelatedUser(User $relatedUser): self
    {
        $this->relatedUser = $relatedUser;

        return $this;
    }

    /**
     * @return Collection|TeacherType[]
     */
    public function getTypes(): Collection
    {
        return $this->types;
    }

    public function addType(TeacherType $type): self
    {
        if (!$this->types->contains($type)) {
            $this->types[] = $type;
            $type->addTeacher($this);
        }

        return $this;
    }

    public function removeType(TeacherType $type): self
    {
        if ($this->types->removeElement($type)) {
            $type->removeTeacher($this);
        }

        return $this;
    }
}
