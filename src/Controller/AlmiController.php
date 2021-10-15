<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlmiController extends AbstractController
{
    /**
     * @Route("/almi", name="almi")
     */
    public function index(): Response
    {
        return $this->render('almi/index.html.twig', [
            'controller_name' => 'AlmiController',
        ]);
    }
}
