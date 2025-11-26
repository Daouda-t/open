<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicController extends Controller
{
    public $users = [
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
            'surname' => 'Neri',
            'role' => 'CIO'
        ],
    ];
    public function homepage()
    {
        return view('welcome');
    }
    public function aboutUs()
    {
        return view('about-us', ['users' => $this->users]);
    }
    public function aboutUsDetail($name)
    {

        foreach ($this->users as $user) {
            if ($name == $user['name']) {
                return view('about-us-detail', ['user' => $user]);
            }
        }
    }
}
