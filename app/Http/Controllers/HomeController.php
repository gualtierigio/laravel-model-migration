<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    public function index(){

        $travels = Movie::all();

        return view('home', ['travels' => $travels]);
    }

}
