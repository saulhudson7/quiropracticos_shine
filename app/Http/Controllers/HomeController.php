<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
 public function index()
    {
        // Trae todos los contenidos del slider
        $carrucelImg = DB::table('carrucel')->get();
// dd($carrucelImg);
        // Retorna la vista "home" pasando la variable
        return view('home', compact('carrucelImg'));
    }
}


