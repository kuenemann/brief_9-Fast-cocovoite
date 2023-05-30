<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OffersController extends AbstractController
{
    #[Route('/offers', name: 'offers_page')]
    public function offers(): Response
    {
        $pagetitle='offers';
        return $this->render('offers/index.html.twig', [
            'controller_name' => 'OffersController',
            'page_title' => $pagetitle, 

        ]);
    }


    #[Route('/offers/index', name: 'offers_index')]
    public function index(): Response
    {
        $pagetitle='offers/index';
        return $this->render('offers/index.html.twig', [
            'controller_name' => 'OffersController',
            'page_title' => $pagetitle,
        ]);
    }



    #[Route('/offers/inscription', name: 'offers_inscription')]
    public function inscription(): Response
    {
        $pagetitle='offerts/inscription';
        return $this->render('offers/inscription.html.twig', [
            'controller_name' => 'OffersController',
            'page_title' => $pagetitle,
        ]);
    }


    #[Route('/offers/reservation', name: 'offers_reservation')]
    public function reservation(): Response
    {
        $pagereservation='offerts/reservation';
        return $this->render('offers/reservation.html.twig',[
            'controller_name' => 'OffersController',
            'page_title' => $pagereservation,
        ]);
    }

  
}

