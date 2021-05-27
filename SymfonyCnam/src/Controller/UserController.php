<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="user_new", methods={"GET","POST"})
     */
    public function new(Request $request,  UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dump($request);
            $user->setCreatedAt(new \DateTime());
            $user->setLastConnexionDate(new \DateTime());
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $user->getPassword()
                )
            );
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('user_show', ['id' => $user->getId()]);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * @Route("/{id}/password", name="user_password", methods={"GET", "POST"})
     */
    public function resetPassword(Request $request, User $user, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $form = $this->createFormBuilder($user)
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dump($request->request->get('previous_password'));
            dump($user->getPassword());
            dump($passwordEncoder->encodePassword($user, $request->request->get('previous_password')));
            /*
             * $userOldPass = $request->request->get('previous_password');
            $hashedOldPass = $passwordEncoder->encodePassword($user, $userOldPass);
            $hashedNewPass = $passwordEncoder->encodePassword($user, $request->request->get('new_password'));

            if($userOldPass === $hashedOldPass){
                if($hashedOldPass !== $hashedNewPass) {
                    $user->setPassword($hashedNewPass);
                } else{
                    return $this->render('user/_reset_password.html.twig', [
                        'error' => "L'ancien mot de passe et le nouveau ne sont pas différents, mise à jour non effectuée.",
                        'user' => $user,
                        'form' => $form->createView(),
                    ]);
                }
            }else{
                return $this->render('user/_reset_password.html.twig', [
                    'error' => "Erreur sur l'ancien mot de passe",
                    'user' => $user,
                    'form' => $form->createView(),
                ]);
            }
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('user_show', ['id' => $user->getId()]);
            */
        }

        return $this->render('user/_reset_password.html.twig', [
            'error' => null,
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
}
