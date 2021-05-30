<?php

namespace App\Controller;

use App\Repository\PlatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/commande", name="commande_index", methods={"GET"})
     */
    public function indexhome(PlatRepository $platRepository): Response
    {
        return $this->render('commande/index.html.twig', [
            'plats' => $platRepository->findAll(),
        ]);
    }
}
