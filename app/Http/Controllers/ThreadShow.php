<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\thread;
class ThreadShow extends Controller
{
    public function thread($slug)
    {
        $threads = Thread::where('slug', $slug)->first();
        $user = DB::table('users')
        ->where('id', $threads->user_id)
        ->get();
        return view('thread.isiThread',['title'=>$threads->judul,
        'thread'=>$threads,
        'user'=>$user]);
    }
}
