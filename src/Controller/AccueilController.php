<?php

namespace App\Controller;

use App\Entity\TabFiltre;
use App\Form\AcceuilType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function index(): Response
    {
        $accueil = new TabFiltre();
        $accueilForm = $this->createForm(AcceuilType::class, $accueil);
        return $this->render('accueil.html.twig');
    }
}
