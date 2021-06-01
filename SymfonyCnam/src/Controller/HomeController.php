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
}
