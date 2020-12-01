<?php

namespace App\Http\Controllers;

use App\Models\Trailer;
use Illuminate\Http\Request;

class TrailerController extends Controller
{
    public function index()
    {
        $trailers = Trailer::get();
        return view('home', compact('trailers'));
    }
}
