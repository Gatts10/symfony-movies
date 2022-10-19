<?php

namespace App\Controller;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 *
 * @ORM\Entity
 * @ORM\Table(name="example_controller")
 */
class ExampleController extends AbstractController
{
    #[Route('/example', name: 'index')]
    public function index(): Response
    {
        $title = "Parasite";
        $movies =  ["Back to the Future - Part 1", "Back to the Future - Part 2", "Back to the Future - Part 3"];

        return $this->render('example.html.twig', array('title' => $title, 'movies' => $movies));
    }

    /*#[Route('/example', name: 'index')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!'
        ]);
     }*/

    #[Route('/example/{id}', name: 'show', methods: ['GET', 'HEAD'])]
    public function show($id): JsonResponse
    {
        return $this->json([
            'ID' => $id
        ]);
    }

    /**
     * oldMethod
     *
     * @Route("/old", name="old")
     */
    public function oldMethod(): JsonResponse
    {
        return $this->json([
            'message' => 'Old method!'
        ]);
    }
}