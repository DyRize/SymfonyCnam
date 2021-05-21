<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'application_name' => 'SymfonyCnam',
        ]);
    }

    /**
     * @Route("/admin", name="home_admin")
     */
    public function admin(): Response
    {
        return $this->render('home/admin.html.twig', [
            'controller_name' => 'HomeController',
            'application_name' => 'SymfonyCnam',
        ]);
    }

    /**
     * @Route("/speaker", name="home_speaker")
     */
    public function speaker(): Response
    {
        return $this->render('home/speaker.html.twig', [
            'controller_name' => 'HomeController',
            'application_name' => 'SymfonyCnam',
        ]);
    }

    /**
     * @Route("/student", name="home_student")
     */
    public function student(): Response
    {
        return $this->render('home/student.html.twig', [
            'controller_name' => 'HomeController',
            'application_name' => 'SymfonyCnam',
        ]);
    }
}
