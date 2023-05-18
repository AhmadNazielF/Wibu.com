<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\anime;
use App\Models\character;
use App\Models\thread;

class LandingPageController extends Controller
{
    public function index(){

        $anime = anime::all();
        $karakter = character::all();
        $thread = thread::all();
        return view('landingpage',[
           'title' => 'Wibu.com', compact('anime','karakter','thread')
      ]);
    }
}
