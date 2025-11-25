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
Route::get('/chi siamo', function () {
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

Route::get('/chi-siamo/datail/{name}', function ($name) {
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