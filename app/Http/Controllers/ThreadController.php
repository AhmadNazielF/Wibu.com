<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\thread;

class ThreadController extends Controller
{
    public function create()
    {
        return view('thread.createThread');
    }
    public function store(Request $request)
    {
        thread::create([
            'category'=>$request['kategori'],
            'judul'=>$request['title'],
            'comment'=>$request['text'],
            'user_id' => auth()->id()
        ]);
        return view('thread.isiThread');
    }
}
