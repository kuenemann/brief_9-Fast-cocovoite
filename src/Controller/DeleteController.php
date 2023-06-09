<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Car;
use App\Entity\Ride;
use App\Entity\Rule;

class DeleteController extends AbstractController
{
    #[Route('/delete/car/{id}', name: 'app_delete_car')]
    public function deleteCar(Car $car, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($car);
        $entityManager->flush();

        return $this->redirectToRoute('app_profil');
    }

    #[Route('/delete/ride/{id}', name: 'app_delete_ride')]
    public function deleteRide(Ride $ride, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($ride);
        $entityManager->flush();

        return $this->redirectToRoute('app_profil');
    }

    #[Route('/delete/rule/{id}', name: 'app_delete_rule')]
    public function deleteRule(Rule $rule, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($rule);
        $entityManager->flush();

        return $this->redirectToRoute('app_profil');
    }

    #[Route('/delete/user', name: 'app_delete_user')]
    public function deleteUser(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $entityManager->remove($user);
        $entityManager->flush();

        // Déconnexion de l'utilisateur après suppression du compte
        $this->get('security.token_storage')->setToken(null);
        $this->get('session')->invalidate();

        return $this->redirectToRoute('app_home');
    }
}
