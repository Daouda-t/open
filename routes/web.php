<?php

use Illuminate\Support\Facades\Route;

/*
----------------------------------------------
| Web Routes
----------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|----------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
})->name('homepage');
Route::get('/chi-siamo', function () {
    $users = [
        [
            'name' => 'Mario',
            'surname' => 'Rossi',
            'role' => 'Founder & CEO'
        ],
        [
            'name' => 'Luigi',
            'surname' => 'Verdi',
            'role' => 'CTO'
        ],
        [
            'name' => 'Giulia',
            'surname' => 'Bianchi',
            'role' => 'CFO'
        ],
    ];
    return view('about-us', ['users' => $users]);
})->name('aboutUs');

Route::get('/chi-siamo/detail/{name}', function ($name) {
    $users = [
        [
            'name' => 'Mario',
            'surname' => 'Rossi',
            'role' => 'Founder & CEO'
        ],
        [
            'name' => 'Luigi',
            'surname' => 'Verdi',
            'role' => 'CTO'
        ],
        [
            'name' => 'Giulia',
            'surname' => 'Bianchi',
            'role' => 'CFO'
        ],
    ];
    foreach ($users as $user) {
        if ($name == $user['name']) {
            return view('about-us-detail', ['user' => $user]);
        }
    }
})->name('aboutUsDetail');
Route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');

Route::get('/movies', function () {
    $movies = [
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
    return view('movie.movies', ['movies' => $movies]);
})->name('movie.list');

Route::get('/movies/detail/{id}', function ($id) {
    $movies = [
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
    foreach ($movies as $movie) {
        if ($id == $movie['id']) {
            return view('movie.movie-detail', ['movie' => $movie]);
        }
    }
})->name('movie.detail');