<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\anime;
use App\Models\character;

class AnimePageController extends Controller
{

    public function index($slug){
        $anime=anime::where('slug','LIKE',$slug)->first();
        DB::table('animes')->where('slug','LIKE',$slug)->increment('click');
        $character=character::where('anime_id',$anime->id)->get();
        return view('animepage', [
           'title' => 'anime',
           'anime' => $anime,
           'character' => $character
      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show()
    {
        return view('admin.newAnime',['title'=>'Karakter']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->file('image')){
            $link = 'foto/'.time().'-'.$request->image->getClientOriginalName();
            $request->image->move('foto', $link);
       }

       anime::create([
        'judul'=>$request['judul'],
        'slug' => strtolower(str_replace(' ', '_', $request->nama)),
        'judul_alternatif'=>$request['judul_alternatif'],
        'genre'=>$request['genre'],
        'status'=>$request['status'],
        'ratings'=>$request['ratings'],
        'jumlah_episode'=>$request['jumlah_episode'],
        'studio'=>$request['studio'],
        'tahun_tayang'=>$request['tahun_tayang'],
        'sinopsis'=>$request['sinopsis'],
        'image'=>$link,
        'click'=>'0'
     ]);

       return redirect()->back();
    }

    public function topAnime() {
        $startDate = Carbon::now()->subDays(7); // Mengatur tanggal mulai jangka waktu (7 hari sebelumnya)
        $endDate = Carbon::now(); // Mengatur tanggal akhir jangka waktu (tanggal saat ini)
    
        $topAnime = Anime::select('*')
            ->whereBetween('created_at', [$startDate, $endDate]) // Mengatur rentang tanggal
            ->orderBy('click', 'desc')
            ->take(13)
            ->get();
        return view('animepopuler', ['title'=>'KarakterPopular','topAnime' => $topAnime]);
    }
    public function destroy(string $id)
    {
        $anime = Anime::find($id);

        $anime->delete();
    }
}
