<?php

namespace App\Entity;

use App\Repository\SubjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SubjectRepository::class)
 */
class Subject
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
    private $code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $label;

    /**
     * @ORM\ManyToMany(targetEntity=Teacher::class, inversedBy="subjects")
     */
    private $teachers;

    /**
     * @ORM\OneToMany(targetEntity=Grade::class, mappedBy="subject", orphanRemoval=true)
     */
    private $grades;

    /**
     * @ORM\ManyToMany(targetEntity=Student::class, inversedBy="subjects")
     */
    private $students;

    public function __construct()
    {
        $this->teachers = new ArrayCollection();
        $this->grades = new ArrayCollection();
        $this->students = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return Collection|Teacher[]
     */
    public function getTeachers(): Collection
    {
        return $this->teachers;
    }

    public function addTeacher(Teacher $teacher): self
    {
        if (!$this->teachers->contains($teacher)) {
            $this->teachers[] = $teacher;
        }

        return $this;
    }

    public function removeTeacher(Teacher $teacher): self
    {
        $this->teachers->removeElement($teacher);

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
            $grade->setSubject($this);
        }

        return $this;
    }

    public function removeGrade(Grade $grade): self
    {
        if ($this->grades->removeElement($grade)) {
            // set the owning side to null (unless already changed)
            if ($grade->getSubject() === $this) {
                $grade->setSubject(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Student[]
     */
    public function getStudents(): Collection
    {
        return $this->students;
    }

    public function addStudent(Student $student): self
    {
        if (!$this->students->contains($student)) {
            $this->students[] = $student;
        }

        return $this;
    }

    public function removeStudent(Student $student): self
    {
        $this->students->removeElement($student);

        return $this;
    }
}
