<?php

namespace App\Controller;

use App\Entity\Project;
use App\Entity\Student;
use App\Entity\Subject;
use App\Form\StudentType;
use App\Repository\StudentRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/student")
 * @IsGranted("ROLE_ADMIN")
 */
class StudentController extends AbstractController
{
    /**
     * @Route("/", name="student_index", methods={"GET"})
     */
    public function index(StudentRepository $studentRepository): Response
    {
        return $this->render('student/index.html.twig', [
            'students' => $studentRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="student_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $student = new Student();
        $form = $this->createForm(StudentType::class, $student);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($student);

            foreach ($form->get('subjects')->getData() as $subject) {
                $updatedSubject = $entityManager->find(Subject::class, $subject->getId());
                $updatedSubject->addStudent($student);
            }
            foreach ($form->get('projects')->getData() as $project) {
                $updatedProject = $entityManager->find(Project::class, $project->getId());
                $updatedProject->addStudent($student);
            }

            $entityManager->flush();

            return $this->redirectToRoute('promotion_show', ['id' => $student->getPromotion()->getId()]);
        }

        return $this->render('student/new.html.twig', [
            'student' => $student,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="student_show", methods={"GET"})
     */
    public function show(Student $student): Response
    {
        return $this->render('student/show.html.twig', [
            'student' => $student,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="student_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Student $student): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $subjectRepository = $entityManager->getRepository(Subject::class);
        $projectRepository = $entityManager->getRepository(Project::class);

        $form = $this->createForm(StudentType::class, $student);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            foreach ($subjectRepository->findAll() as $subjectInDb) {
                $subjectInDb->removeStudent($student);
            }
            foreach ($form->get('subjects')->getData() as $subject) {
                $updatedSubject = $entityManager->find(Subject::class, $subject->getId());
                $updatedSubject->addStudent($student);
            }

            foreach ($projectRepository->findAll() as $projectInDb) {
                $projectInDb->removeStudent($student);
            }
            foreach ($form->get('projects')->getData() as $project) {
                $updatedProject = $entityManager->find(Project::class, $project->getId());
                $updatedProject->addStudent($student);
            }

            $entityManager->flush();

            return $this->redirectToRoute('promotion_show', ['id' => $student->getPromotion()->getId()]);
        }

        return $this->render('student/edit.html.twig', [
            'student' => $student,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="student_delete", methods={"POST"})
     */
    public function delete(Request $request, Student $student): Response
    {
        if ($this->isCsrfTokenValid('delete'.$student->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($student);
            $entityManager->flush();
        }

        return $this->redirectToRoute('promotion_show', ['id' => $student->getPromotion()->getId()]);
    }
}
