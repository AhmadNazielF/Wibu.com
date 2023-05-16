<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimePageController extends Controller
{
    public function index(){
        return view('animepage', [
           'title' => 'ANIME'
      ]);
    }
}
