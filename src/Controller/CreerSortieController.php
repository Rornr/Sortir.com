<?php

namespace App\Controller;

use App\Entity\TabFiltre;
use App\Form\CreerSortieType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreerSortieController extends AbstractController
{
    #[Route('/creersortie', name: 'app_creer_sortie')]
    public function create(
        Request                $request,
        EntityManagerInterface $entityManager
    ): Response
    {
        $sortie = new TabFiltre();
        $sortieForm = $this->createForm(CreerSortieType::class, $sortie);

        $sortieForm->handleRequest($request);
dump($sortieForm);
        if ($sortieForm->isSubmitted()) {
            $entityManager->persist($sortie);
            $entityManager->flush();
            $this->addFlash('success', 'Les données ont bien été ajoutées');
            return $this->redirectToRoute('app_login', ['login' => $sortie->getId()]);
        }

        return $this->render('Sortie/sortie.html.twig', [
            'sortieForm' => $sortieForm->createView()
        ]);
    }
}
