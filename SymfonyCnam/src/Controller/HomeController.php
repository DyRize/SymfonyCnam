<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private $c_homeController = 'HomeController';
    private $c_applicationName = 'SymfonyCnam';

    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => $this->c_homeController,
            'application_name' => $this->c_applicationName,
        ]);
    }

    /**
     * @Route("/home/admin", name="home_admin")
     */
    public function admin(): Response
    {
        return $this->render('home/admin.html.twig', [
            'controller_name' => $this->c_homeController,
            'application_name' => $this->c_applicationName,
        ]);
    }

    /**
     * @Route("/home/speaker", name="home_speaker")
     */
    public function speaker(): Response
    {
        return $this->render('home/speaker.html.twig', [
            'controller_name' => $this->c_homeController,
            'application_name' => $this->c_applicationName,
        ]);
    }

    /**
     * @Route("/home/student", name="home_student")
     */
    public function student(): Response
    {
        return $this->render('home/student.html.twig', [
            'controller_name' => $this->c_homeController,
            'application_name' => $this->c_applicationName,
        ]);
    }

    /**
     * @Route("home/bde", name="home_bde")
     */
    public function bde(): Response
    {
        return $this->render('home/bde.html.twig', [
            'controller_name' => $this->c_homeController,
            'application_name' => $this->c_applicationName
        ]);
    }
}
