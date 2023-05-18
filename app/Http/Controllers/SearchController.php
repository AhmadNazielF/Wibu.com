<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anime;
use App\Models\character;
use App\Models\thread;

class SearchController extends Controller
{

    public function search()
    {

    
            $anime = anime::where('judul', 'like', '%' . request('search') . '%')->get();
            $karakter = character::where('nama', 'like', '%' . request('search') . '%')->get();
            $thread = thread::where('judul', 'like', '%' . request('search') . '%')->get();
    
    
        return view('search',[
            'title' => 'Search', 'anime'=>$anime , 'karakter'=>$karakter, 'thread'=>$thread
       ]);
    }
    
}
