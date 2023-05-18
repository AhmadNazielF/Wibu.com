<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\thread;
use App\Models\User;
use App\Models\comment;
use Illuminate\Support\Facades\DB;

class ThreadController extends Controller
{
    public function index()
    {
        $threads = Thread::with('user')->get();
    
        return view('thread.listThread', [
            'title' => 'listThread', 
            'threads' => $threads
        ]);
    }
    public function thread($slug)
    {   
        $thread = DB::table('threads')
        ->where('slug','LIKE'. $slug)
        ->first();
        $user = DB::table('users')
        ->where('id', $thread->user_id)
        ->get();
        $comment = comment::with('user')->
        where('thread_id',$thread->id)->get();
        $threadall = DB::table('threads')
        ->orderByDesc('created_at')
        ->take(20)
        ->get();

        return view('thread.isiThread',['title'=>$thread->judul,
        'thread'=>$thread,
        'threadall'=>$threadall,
        'user'=>$user,
        'comment'=>$comment]);
    }
    public function create()
    {
        return view('thread.createThread',[
            'title' => 'createThread'
       ]);
    }
    public function store(Request $request)
{
    // dd($request);
    thread::create([
        'judul' => $request['judul'],
        'slug' => strtolower(str_replace(' ', '_', $request->judul)),
        'comment' => $request['comment'],
        'user_id' => auth()->id()
    ]);
    
    return redirect('/listthread');
}

    public function isi()
    {
    //     $thread = thread::where('id', 'LIKE', $slug)->first();
        return view('thread.isiThread',[
            'title' => 'isi'
       ]);
    }
    public function insertComment(Request $request)
    {

        $comment= comment::create([
        'comment' => $request['comment'],
        'user_id' => auth()->id(),
        'thread_id'=>$request['thread_id']
        ]);
        // Lakukan apa pun yang diperlukan setelah penyimpanan komentar, seperti pengiriman notifikasi, penambahan poin, dll.
    
        return redirect()->back();
    }
    
}
