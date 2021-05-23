<?php

namespace App\Controller;

use App\Entity\TeacherType;
use App\Form\TeacherTypeType;
use App\Repository\TeacherTypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/teacher/type")
 */
class TeacherTypeController extends AbstractController
{
    /**
     * @Route("/", name="teacher_type_index", methods={"GET"})
     */
    public function index(TeacherTypeRepository $teacherTypeRepository): Response
    {
        return $this->render('teacher_type/index.html.twig', [
            'teacher_types' => $teacherTypeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="teacher_type_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $teacherType = new TeacherType();
        $form = $this->createForm(TeacherTypeType::class, $teacherType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($teacherType);
            $entityManager->flush();

            return $this->redirectToRoute('teacher_type_index');
        }

        return $this->render('teacher_type/new.html.twig', [
            'teacher_type' => $teacherType,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="teacher_type_show", methods={"GET"})
     */
    public function show(TeacherType $teacherType): Response
    {
        return $this->render('teacher_type/show.html.twig', [
            'teacher_type' => $teacherType,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="teacher_type_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TeacherType $teacherType): Response
    {
        $form = $this->createForm(TeacherTypeType::class, $teacherType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('teacher_type_index');
        }

        return $this->render('teacher_type/edit.html.twig', [
            'teacher_type' => $teacherType,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="teacher_type_delete", methods={"POST"})
     */
    public function delete(Request $request, TeacherType $teacherType): Response
    {
        if ($this->isCsrfTokenValid('delete'.$teacherType->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($teacherType);
            $entityManager->flush();
        }

        return $this->redirectToRoute('teacher_type_index');
    }
}
