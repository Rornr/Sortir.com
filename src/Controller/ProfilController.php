<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfilType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'app_profil')]
    public function create(
        Request                $request,
        EntityManagerInterface $entityManager,
    ): Response
    {
        $profil= new User();
        $profilForm = $this->createForm(ProfilType::class, $profil);

        $profilForm->handleRequest($request);
        dump($profilForm);
        if ($profilForm->isSubmitted()) {
            $entityManager->persist($profil);
            $entityManager->flush();
            $this->addFlash('success', 'Les données ont bien été ajoutées');

            return $this->redirectToRoute('app_main');
        }

        return $this->render('profil/profil.html.twig', [
            'profilForm' => $profilForm->createView()
        ]);
    }


}
