<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrailerController extends Controller
{
    public function index()
    {
        $trailers = [
            ['nombre' => 'Los Increibles'],
            ['nombre' => 'Piratas del Caribe'],
            ['nombre' => 'La Cenicienta']
        ];
        return view('home', compact('trailers'));
    }
}
