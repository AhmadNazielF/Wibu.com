<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KarakterPageController extends Controller
{
    public function index(){
        return view('karakterpage', [
           'title' => 'KARAKTER'
      ]);
    }
}
