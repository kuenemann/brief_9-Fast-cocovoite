<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditController extends AbstractController
{
    #[Route('/edit', name: 'app_edit')]
    public function index(): Response
    {
        return $this->render('edit/edit.html.twig', [
            'controller_name' => 'EditController',
        ]);
    }
}
