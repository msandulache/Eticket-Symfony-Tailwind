<?php

namespace App\Controller;

use App\Repository\GenreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GenreController extends AbstractController {
    #[Route('/genres', name: 'genre_list')]
    public function index(
        GenreRepository $genreRepository
    )
    : Response {

        return $this->render(
            'genre/index.html.twig',
            [
                'genres' => $genreRepository->findAll(),
            ]
        );
    }
}
