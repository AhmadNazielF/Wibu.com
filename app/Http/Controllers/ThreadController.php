<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\thread;

class ThreadController extends Controller
{
    public function index(){
        return view('thread.listThread', [
           'title' => 'listThread',
      ]);
    }
    public function create()
    {
        return view('thread.createThread',[
            'title' => 'createThread'
       ]);
    }
    public function store(Request $request)
    {
        thread::create([
            'slug'=>strtolower(str_replace(' ', '_', $request->judul)),
            'category'=>$request['kategori'],
            'judul'=>$request['judul'],
            'comment'=>$request['text'],
            'user_id' => auth()->id()
        ]);
        return view('thread.isiThread',[
            'title' => 'isi'
       ]);
    }
    public function isi()
    {
    //     $thread = thread::where('id', 'LIKE', $slug)->first();
        return view('thread.isiThread',[
            'title' => 'isi'
       ]);
    }
    public function comment($slug)
    {
        $thread = DB::table('threads')
    ->where('slug', 'LIKE', $slug)
    ->first();

        $thread_id = null;

        if ($thread) {
        $thread_id = $thread->id;
        }
        comment::create([
            'thread_id' =>$thread_id,
            'comment'=>$request['text'],
            'user_id' => auth()->id()
        ]);
        return view('thread.isiThread',[
            'title' => 'isi'
       ]);
    }
}
