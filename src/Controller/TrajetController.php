<?php

namespace App\Controller;

use App\Entity\Ride;
use App\Entity\Rule;
use App\Repository\RideRepository;
use App\Repository\RuleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrajetController extends AbstractController
{
    #[Route('/trajet', name: 'app_trajet')]
    public function index(RideRepository $rideRepository): Response
    {
        return $this->render('trajet/trajet.html.twig', [
            'trajets' => $rideRepository->findBy([], ['id'=>'ASC'])
        ]);
    }
}
