<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    //Method Two
    #[Route('/movie', name: 'movie')]
    public function index(): Response
    {
        //findAll() - SELECT * FROM movies;
        //find() - SELECT * FROM movies WHERE id = 1;
        //findBy() - SELECT * FROM movies ORDER BY id DESC;
        //findOneBy() - SELECT * FROM movies WHERE id = 2 AND title = 'The Dark Knight' ORDER BY id DESC;
        //count() - SELECT COUNT() FROM movies;
        //count() - SELECT COUNT() FROM movies WHERE id = 1;

        $repository = $this->em->getRepository(Movie::class);

        $movies = $repository->findAll();
        //$movies = $repository->find(1);
        //$movies = $repository->findBy([], ['id' => 'DESC']);
        //$movies = $repository->findOneBy(['id' => 2, 'title' => 'The Dark Knight'], ['id' => 'DESC']);
        //$movies = $repository->count([]);
        //$movies = $repository->count(['id' => 1]);
        //$movies = $repository->getClassName();

        //dd($movies);

        return $this->render('index.html.twig', ['movies' => $movies]);
    }

//    //Other Type Of Using The Repository
//    #[Route('/movie', name: 'movie')]
//    public function index(MovieRepository $movieRepository): Response
//    {
//        $movies = $movieRepository->findAll();
//
//        dd($movies);
//
//        return $this->render('index.html.twig');
//    }
}
