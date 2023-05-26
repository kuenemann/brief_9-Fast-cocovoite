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


    #[Route('/offers/detail', name: 'offers_detail')]
    public function detail(): Response
    {
        $pagetitle='offers/detail';
        return $this->render('offers/detail.html.twig', [
            'controller_name' => 'OffersController',
            'page_title' => $pagetitle,
        ]);
    }



    #[Route('/offers/test', name: 'offers_test')]
    public function test(): Response
    {
        $pagetitle='offerts/test';
        return $this->render('offers/test.html.twig', [
            'controller_name' => 'OffersController',
            'page_title' => $pagetitle,
        ]);
    }

}

