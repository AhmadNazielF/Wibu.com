<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KarakterPopulerController extends Controller
{
    public function index(){
        return view('karakterpopuler', [
           'title' => 'KARAKTER POPULER'
      ]);
    }
}
