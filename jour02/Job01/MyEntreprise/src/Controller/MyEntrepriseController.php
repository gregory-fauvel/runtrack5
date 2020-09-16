<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MyEntrepriseController extends AbstractController
{
    /**
     * @Route("/my/entreprise", name="my_entreprise")
     */
    public function index()
    {
        return $this->render('my_entreprise/index.html.twig', [
            'controller_name' => 'MyEntrepriseController',
        ]);
    }

     /**
     * @Route("/", name="home")
     */

     public function home()
    {
        return $this->render('myentreprise/index.html.twig', [
            'controller_name' => 'MyEntrepriseController',
        ]);
    }
}
