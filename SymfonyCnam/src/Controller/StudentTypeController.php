<?php

namespace App\Controller;

use App\Entity\StudentType;
use App\Form\StudentTypeType;
use App\Repository\StudentTypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/student/type")
 */
class StudentTypeController extends AbstractController
{
    /**
     * @Route("/", name="student_type_index", methods={"GET"})
     */
    public function index(StudentTypeRepository $studentTypeRepository): Response
    {
        return $this->render('student_type/index.html.twig', [
            'student_types' => $studentTypeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="student_type_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $studentType = new StudentType();
        $form = $this->createForm(StudentTypeType::class, $studentType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($studentType);
            $entityManager->flush();

            return $this->redirectToRoute('student_type_index');
        }

        return $this->render('student_type/new.html.twig', [
            'student_type' => $studentType,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="student_type_show", methods={"GET"})
     */
    public function show(StudentType $studentType): Response
    {
        return $this->render('student_type/show.html.twig', [
            'student_type' => $studentType,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="student_type_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, StudentType $studentType): Response
    {
        $form = $this->createForm(StudentTypeType::class, $studentType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('student_type_index');
        }

        return $this->render('student_type/edit.html.twig', [
            'student_type' => $studentType,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="student_type_delete", methods={"POST"})
     */
    public function delete(Request $request, StudentType $studentType): Response
    {
        if ($this->isCsrfTokenValid('delete'.$studentType->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($studentType);
            $entityManager->flush();
        }

        return $this->redirectToRoute('student_type_index');
    }
}
