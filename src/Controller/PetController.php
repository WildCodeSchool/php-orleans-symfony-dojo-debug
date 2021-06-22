<?php

namespace App\Controller;

use App\Repository\PetsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PetController extends AbstractController
{
    /**
     * @Route(/, name="pets")
     */
    public function index(PetsRepository $petsRepository): Response
    {
        $pet = $petsRepository->findAll();
        return $this->twig->render('pet/index.html.twig', [
            'pet' => $pet,
        ]);
    }
}
