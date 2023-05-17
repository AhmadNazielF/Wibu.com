<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KarakterController extends Controller
{
    public function index(){
        return view('admin.newKarakter', [
           'title' => 'NEW  KARAKTER'
      ]);
    }
}
