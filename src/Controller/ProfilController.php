<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Car;


class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'app_profil')]
    public function profil(): Response
    {
        $user = $this->getUser();

        return $this->render('profil/profil.html.twig', [
            'user' => $user, 
        ]);
    }
}
