<?php

namespace App\Controller;

use App\Api\TheMovieDataBase;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController {
    #[Route('/', name: 'app_index')]
    public function index(TheMovieDataBase $theMovieDataBase): Response
    {
        return $this->render('index.html.twig', [
            'nowPlayingMovies' => $theMovieDataBase->getNowPlayingMovies(8),
            'popularMovies' => $theMovieDataBase->getPopularMovies(8)
        ]);
    }

    #[Route('/top-rated', name: 'app_top_rated')]
    public function topRated(TheMovieDataBase $theMovieDataBase): Response
    {
        return $this->render('movie/list.html.twig', [
            'title' => 'Top rated movies',
            'movies' => $theMovieDataBase->getTopRatedMovies(20)
        ]);
    }

    #[Route('/romance', name: 'app_romance')]
    public function romance(TheMovieDataBase $theMovieDataBase): Response
    {
        return $this->render('movie/list.html.twig', [
            'title' => 'Romance night',
            'movies' => $theMovieDataBase->getRomanceMovies(20)
        ]);
    }

    #[Route('/family', name: 'app_family')]
    public function family(TheMovieDataBase $theMovieDataBase): Response
    {
        return $this->render('movie/list.html.twig', [
            'title' => 'Family movies',
            'movies' => $theMovieDataBase->getFamilyMovies(20)
        ]);
    }

    #[Route('/movie/{id}', name: 'app_movie')]
    public function movie(int $id, TheMovieDataBase $theMovieDataBase): Response
    {
        $movie = $theMovieDataBase->getMovie($id);
//dd($movie);
        return $this->render('movie/show.html.twig', [
            'movie' => $movie,
        ]);
    }
}