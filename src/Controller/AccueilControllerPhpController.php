<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilControllerPhpController extends AbstractController
{
    /**
     * @Route("/accueil/controller/php", name="accueil_controller_php")
     */
    public function index(): Response
    {
        return $this->render('accueil_controller_php/index.html.twig', [
            'controller_name' => 'AccueilControllerPhpController',
        ]);
    }
}
