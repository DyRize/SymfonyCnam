<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/bde")
 * @IsGranted("ROLE_ADMIN")
 */
class BDEController extends AbstractController
{
    /**
     * @Route("/", name="bde_index")
     */
    public function index(UserRepository $userRepository): Response
    {
        $bdeMembers = [];
        foreach ($userRepository->findAll() as $user) {
            if (in_array('ROLE_BDE', $user->getRoles())) {
                $bdeMembers[] = $user;
            }
        }
        return $this->render('bde/index.html.twig', [
            'bdeMembers' => $bdeMembers,
        ]);
    }

    /**
     * @Route("/{id}", name="bde_remove", methods={"GET"})
     */
    public function remove(User $user): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $roles = $user->getRoles();
        unset($roles[array_search('ROLE_BDE', $roles)]);

        $user->setRoles($roles);
        $entityManager->flush();

        return $this->redirectToRoute('bde_index');
    }
}
