<?php

namespace App\Controller;

use App\Entity\ArticleType;
use App\Form\ArticleTypeType;
use App\Repository\ArticleTypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/article/type")
 */
class ArticleTypeController extends AbstractController
{
    /**
     * @Route("/", name="article_type_index", methods={"GET"})
     */
    public function index(ArticleTypeRepository $articleTypeRepository): Response
    {
        return $this->render('article_type/index.html.twig', [
            'article_types' => $articleTypeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="article_type_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $articleType = new ArticleType();
        $form = $this->createForm(ArticleTypeType::class, $articleType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($articleType);
            $entityManager->flush();

            return $this->redirectToRoute('article_type_index');
        }

        return $this->render('article_type/new.html.twig', [
            'article_type' => $articleType,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="article_type_show", methods={"GET"})
     */
    public function show(ArticleType $articleType): Response
    {
        return $this->render('article_type/show.html.twig', [
            'article_type' => $articleType,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="article_type_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ArticleType $articleType): Response
    {
        $form = $this->createForm(ArticleTypeType::class, $articleType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('article_type_index');
        }

        return $this->render('article_type/edit.html.twig', [
            'article_type' => $articleType,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="article_type_delete", methods={"POST"})
     */
    public function delete(Request $request, ArticleType $articleType): Response
    {
        if ($this->isCsrfTokenValid('delete'.$articleType->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($articleType);
            $entityManager->flush();
        }

        return $this->redirectToRoute('article_type_index');
    }
}
