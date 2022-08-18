<?php

namespace App\Controller;

use App\Repository\TabFiltreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(TabFiltreRepository $tabFiltreRepository): Response
    {
        $sorties=$tabFiltreRepository->findAll();
        return $this->render('main/index.html.twig', compact('sorties'));
    }
}
