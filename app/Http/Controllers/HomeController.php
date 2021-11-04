<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    public function index(){

        $movies = Movie::all();

        return view('home', ['movies' => $movies]);
    }

    public function movie(){

        return view('movie');
    }
}
