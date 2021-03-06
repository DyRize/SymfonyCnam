<?php

namespace App\Controller;

use App\Entity\Project;
use App\Entity\Student;
use App\Entity\Subject;
use App\Form\ProjectType;
use App\Repository\ProjectRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/project")
 */
class ProjectController extends AbstractController
{
    /**
     * @Route("/", name="project_index", methods={"GET"})
     */
    public function index(ProjectRepository $projectRepository): Response
    {
        return $this->render('project/index.html.twig', [
            'projects' => $projectRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="project_new", methods={"GET","POST"})
     * @IsGranted("ROLE_SPEAKER")
     */
    public function new(Request $request): Response
    {
        $project = new Project();
        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($project);


            foreach ($form->get('students')->getData() as $student) {
                $updatedStudent = $entityManager->find(Student::class, $student->getId());
                $updatedStudent->addProject($project);
            }
            foreach ($form->get('subjects')->getData() as $subject) {
                $updatedSubject = $entityManager->find(Subject::class, $subject->getId());
                $updatedSubject->addProject($project);
            }

            $entityManager->flush();

            return $this->redirectToRoute('project_index');
        }

        return $this->render('project/new.html.twig', [
            'project' => $project,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="project_show", methods={"GET"})
     */
    public function show(Project $project): Response
    {
        return $this->render('project/show.html.twig', [
            'project' => $project,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="project_edit", methods={"GET","POST"})
     * @IsGranted("ROLE_SPEAKER")
     */
    public function edit(Request $request, Project $project): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $studentRepository = $entityManager->getRepository(Student::class);
        $subjectRepository = $entityManager->getRepository(Subject::class);

        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            foreach ($studentRepository->findAll() as $studentInDb) {
                $studentInDb->removeProject($project);
            }
            foreach ($form->get('students')->getData() as $student) {
                $updatedStudent = $entityManager->find(Student::class, $student->getId());
                $updatedStudent->addProject($project);
            }

            foreach ($subjectRepository->findAll() as $subjectInDb) {
                $subjectInDb->removeProject($project);
            }
            foreach ($form->get('subjects')->getData() as $subject) {
                $updatedSubject = $entityManager->find(Subject::class, $subject->getId());
                $updatedSubject->addProject($project);
            }

            $entityManager->flush();

            return $this->redirectToRoute('project_index');
        }

        return $this->render('project/edit.html.twig', [
            'project' => $project,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="project_delete", methods={"POST"})
     * @IsGranted("ROLE_SPEAKER")
     */
    public function delete(Request $request, Project $project): Response
    {
        if ($this->isCsrfTokenValid('delete'.$project->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($project);
            $entityManager->flush();
        }

        return $this->redirectToRoute('project_index');
    }
}
