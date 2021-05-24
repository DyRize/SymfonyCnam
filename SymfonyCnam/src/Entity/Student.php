<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 */
class Student
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $arrivedAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $graduatedAt;

    /**
     * @ORM\OneToOne(targetEntity=User::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $relatedUser;

    /**
     * @ORM\ManyToOne(targetEntity=Promotion::class, inversedBy="students")
     * @ORM\JoinColumn(nullable=false)
     */
    private $promotion;

    /**
     * @ORM\OneToMany(targetEntity=Grade::class, mappedBy="student")
     */
    private $grades;

    /**
     * @ORM\ManyToMany(targetEntity=Subject::class, mappedBy="students")
     */
    private $subjects;

    /**
     * @ORM\ManyToMany(targetEntity=Project::class, mappedBy="students")
     */
    private $projects;

    public function __construct()
    {
        $this->types = new ArrayCollection();
        $this->grades = new ArrayCollection();
        $this->subjects = new ArrayCollection();
        $this->projects = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArrivedAt(): ?\DateTimeInterface
    {
        return $this->arrivedAt;
    }

    public function setArrivedAt(\DateTimeInterface $arrivedAt): self
    {
        $this->arrivedAt = $arrivedAt;

        return $this;
    }

    public function getGraduatedAt(): ?\DateTimeInterface
    {
        return $this->graduatedAt;
    }

    public function setGraduatedAt(?\DateTimeInterface $graduatedAt): self
    {
        $this->graduatedAt = $graduatedAt;

        return $this;
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

    public function getPromotion(): ?Promotion
    {
        return $this->promotion;
    }

    public function setPromotion(?Promotion $promotion): self
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * @return Collection|Grade[]
     */
    public function getGrades(): Collection
    {
        return $this->grades;
    }

    public function addGrade(Grade $grade): self
    {
        if (!$this->grades->contains($grade)) {
            $this->grades[] = $grade;
            $grade->setStudent($this);
        }

        return $this;
    }

    public function removeGrade(Grade $grade): self
    {
        if ($this->grades->removeElement($grade)) {
            // set the owning side to null (unless already changed)
            if ($grade->getStudent() === $this) {
                $grade->setStudent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Subject[]
     */
    public function getSubjects(): Collection
    {
        return $this->subjects;
    }

    public function addSubject(Subject $subject): self
    {
        if (!$this->subjects->contains($subject)) {
            $this->subjects[] = $subject;
            $subject->addStudent($this);
        }

        return $this;
    }

    public function removeSubject(Subject $subject): self
    {
        if ($this->subjects->removeElement($subject)) {
            $subject->removeStudent($this);
        }

        return $this;
    }

    /**
     * @return Collection|Project[]
     */
    public function getProjects(): Collection
    {
        return $this->projects;
    }

    public function addProject(Project $project): self
    {
        if (!$this->projects->contains($project)) {
            $this->projects[] = $project;
            $project->addStudent($this);
        }

        return $this;
    }

    public function removeProject(Project $project): self
    {
        if ($this->projects->removeElement($project)) {
            $project->removeStudent($this);
        }

        return $this;
    }

    public function __toString()
    {
        return $this->relatedUser->getFirstName() . ' ' . $this->relatedUser->getLastName();
    }
}
