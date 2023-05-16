<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimePopulerController extends Controller
{
    public function index(){
        return view('animepopuler', [
           'title' => 'ANIME POPULER'
      ]);
    }
}
