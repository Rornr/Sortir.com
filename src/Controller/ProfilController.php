<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfilType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'app_profil')]
    public function create(): Response
    {
        $profil= new User();
        $profilForm = $this->createForm(ProfilType::class, $profil);
        return $this->render('profil/profil.html.twig', [
            'profilForm' => $profilForm->createView()
        ]);
    }


}
