<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public $movies = [
        [
            'id' => '1',
            'title' => 'Incontri ravvicinati del terzo tipo',
            'director' => 's. MoviesIcons',
            'img' => '/media/poster/MovieIcons.jpg.jpg',
            'genres' => 'sci-fi'
        ],
        [
            'id' => '2',
            'title' => 'immaginidelci',
            'director' => 's. Mendes',
            'img' => '/media/poster/vikings03.jpg',
            'genres' =>
                'Guerra'
        ],
        [
            'id' => '3',
            'title' => 'Quei bravi ragazzi',
            'director' => 'M. ket-har',
            'img' => '/media/poster/ket-har.jpg',
            'genres' =>
                'noir'
        ],
        [
            'id' => '4',
            'title' => 'Barbi',
            'director' => 'G. vikings01',
            'img' => '/media/poster/vikings01.jpg',
            'genres' =>
                'Avventura'
        ],
        [
            'id' => '5',
            'title' => 'lost in translation',
            'director' => 's. vikings02',
            'img' => '/media/poster/vikings02.jpg',
            'genres' =>
                'Drammatico'
        ],
    ];
    public function movielist()
    {
        return view('movie.movies', ['movies' => $this->movies]);
    }
    public function movieDetail($id)
    {
        foreach ($this->movies as $movie) {
            if ($id == $movie['id']) {
                return view('movie.movie-detail', ['movie' => $movie]);
            }
        }
    }
}