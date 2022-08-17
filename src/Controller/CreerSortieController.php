<?php

namespace App\Controller;

use App\Entity\TabFiltre;
use App\Form\CreerSortieType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreerSortieController extends AbstractController
{
    #[Route('/creersortie', name: 'app_creer_sortie')]
    public function index(): Response
    {
        $sortie = new TabFiltre();
        $sortieForm = $this->createForm(CreerSortieType::class, $sortie);
        return $this->render('Sortie/sortie.html.twig', [
            'sortieForm' => $sortieForm->createView()
        ]);
    }
}
