<?php

namespace App\Controller;

use App\Repository\AccueilRepository;
use App\Repository\NavBarreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="app_accueil")
     */
    public function index(AccueilRepository $accueilRepository, NavBarreRepository $navBarreRepository): Response
    {
        $allText = $accueilRepository->findAll();
        $navBarre = $navBarreRepository->findAll();

        return $this->render('accueil/index.html.twig', [
            'allText' => $allText,
            'navBarre' => $navBarre,
        ]);
    }
}
