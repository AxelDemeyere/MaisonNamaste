<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    public $team = [
        [
            'firstName' => 'Manon',
            'lastName' => 'Browaeys',
            'status' => 'Responsable',
            'image' =>  'https://i.pravatar.cc/100?u=Manon',
        ],
        [
            'firstName' => 'Potiron',
            'status' => 'Peluche',
            'image'=> 'https://i.pravatar.cc/100?u=Potiron',
        ],
        [
            'firstName' => 'Mia',
            'status' => 'Cale-porte',
            'image'=> 'https://i.pravatar.cc/100?u=Mia',
        ],
        [
            'firstName' => 'Fluffy',
            'status' => 'Cliente',
            'image'=> 'https://i.pravatar.cc/100?u=Fluffy',
        ],
    ];


    public function index()  {
        return view('about', [
            'title' => 'Maison Namasté',
            'team' => $this->team,
        ]);
    }

}