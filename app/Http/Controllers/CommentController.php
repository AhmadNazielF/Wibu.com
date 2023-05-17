<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\thread;
use App\Models\comment;
use App\Models\User;
class CommentController extends Controller
{
    use App\Models\Thread;
    use App\Models\Comment;
    use Illuminate\Http\Request;
    
    public function store(Request $request, $slug)
    {
        $thread = Thread::where('slug', $slug)->first();
    
        if (!$thread) {
            // Thread tidak ditemukan, handle kasus ini sesuai kebutuhan Anda (contohnya, redirect ke halaman lain atau tampilkan pesan error)
        }
        $comment->thread_id = $thread->id;
        $comment->comment = $request->input('comment');
        $comment->user_id = auth()->id();
        $comment->save();
    
        // Lakukan apa pun yang diperlukan setelah penyimpanan komentar, seperti pengiriman notifikasi, penambahan poin, dll.
    
        return redirect()->route('thread.show', $slug);
    }
    
    
}
