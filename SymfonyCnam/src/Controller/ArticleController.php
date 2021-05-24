<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use App\Repository\ArticleTypeRepository;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\Criteria;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/article")
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="article_index", methods={"GET"})
     */
    public function index(ArticleRepository $articleRepository, ArticleTypeRepository $articleTypeRepository, UserRepository $userRepository, Request $request): Response
    {
        $user = $userRepository->findBy(['email' => $request->getSession()->get('_security.last_username')]);
        if(!empty($user)) {
            $articleTypes = $articleTypeRepository->findAll();
            $articles = array();
            $index = 0;
            $role = '';

            if(in_array('ROLE_ADMIN', $user[0]->getRoles())){
                $articles = $articleRepository->findAll();
                $role = 'ADMIN';
            }elseif(in_array('ROLE_BDE', $user[0]->getRoles())){
                foreach($articleTypes as $type){
                    if($type->getCode() == 'BDE' || $type->getCode() == 'INFO'){
                        $articleType = $articleTypeRepository->find($type->getId());
                        $articles[$index] = $articleRepository->findBy(['type' => $articleType]);
                        $index++;
                    }
                }
                $role = 'BDE';
            }else if(in_array('ROLE_DELEGATE', $user[0]->getRoles())){
                foreach($articleTypes as $type){
                    if($type->getCode() == 'INFO'){
                        $articleType = $articleTypeRepository->find($type->getId());
                        $articles[$index] = $articleRepository->findBy(['type' => $articleType]);
                        $index++;
                    }
                }
                $role = 'DELEGATE';
            }
            return $this->render('article/index.html.twig', [
                'role' => $role,
                'articles' => $articles,
            ]);
        } else {
            return $this->redirectToRoute('home');
        }
    }

    /**
     * @Route("/new", name="article_new", methods={"GET","POST"})
     */
    public function new(Request $request, UserRepository $userRepository): Response
    {
        $user = $userRepository->findBy(['email' => $request->getSession()->get('_security.last_username')]);
        if(!empty($user)) {
            if(in_array('ROLE_ADMIN', $user[0]->getRoles()) ||
                in_array('ROLE_BDE', $user[0]->getRoles()) ||
                in_array('ROLE_DELEGATE', $user[0]->getRoles())){
                $article = new Article();
                $form = $this->createForm(ArticleType::class, $article);
                $form->handleRequest($request);

                if ($form->isSubmitted() && $form->isValid()) {
                    $entityManager = $this->getDoctrine()->getManager();
                    $user = $userRepository->findBy(['email' => $request->getSession()->get('_security.last_username')]);
                    $user = $userRepository->find($user[0]->getId());
                    $article->setCreatedAt(new \DateTime());
                    $article->setAuthor($user);
                    $entityManager->persist($article);
                    $entityManager->flush();
                    return $this->redirectToRoute('article_index');
                }

                return $this->render('article/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }else{
                return $this->redirectToRoute('home');
            }
        } else {
            return $this->redirectToRoute('home');
        }
    }

    /**
     * @Route("/{id}", name="article_show", methods={"GET"})
     */
    public function show(Article $article, Request $request, UserRepository $userRepository): Response
    {
        $user = $userRepository->findBy(['email' => $request->getSession()->get('_security.last_username')]);
        if(!empty($user)) {
            if(in_array('ROLE_ADMIN', $user[0]->getRoles()) ||
                in_array('ROLE_BDE', $user[0]->getRoles()) ||
                in_array('ROLE_DELEGATE', $user[0]->getRoles())) {
                return $this->render('article/show.html.twig', [
                    'article' => $article,
                ]);
            } else {
                return $this->redirectToRoute('home');
            }
        } else {
            return $this->redirectToRoute('home');
        }
    }

    /**
     * @Route("/{id}/edit", name="article_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Article $article, UserRepository $userRepository): Response
    {
        $user = $userRepository->findBy(['email' => $request->getSession()->get('_security.last_username')]);
        if(!empty($user)) {
            if(in_array('ROLE_ADMIN', $user[0]->getRoles()) ||
                in_array('ROLE_BDE', $user[0]->getRoles()) ||
                in_array('ROLE_DELEGATE', $user[0]->getRoles()))
            {
                $form = $this->createForm(ArticleType::class, $article);
                $form->handleRequest($request);

                if ($form->isSubmitted() && $form->isValid()) {
                    $article->setUpdatedAt(new \DateTime());
                    $this->getDoctrine()->getManager()->flush();

                    return $this->redirectToRoute('article_index');
                }

                return $this->render('article/edit.html.twig', [
                    'article' => $article,
                    'form' => $form->createView(),
                ]);
            } else {
                return $this->redirectToRoute('home');
            }
        } else {
            return $this->redirectToRoute('home');
        }
    }

    /**
     * @Route("/{id}", name="article_delete", methods={"POST"})
     */
    public function delete(Request $request, Article $article, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($article);
            $entityManager->flush();
        }

        return $this->redirectToRoute('article_index');
    }
}
