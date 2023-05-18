<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\anime;
use App\Models\character;
use App\Models\thread;

class LandingPageController extends Controller
{
    public function index(){
        $startDate = Carbon::now()->subDays(7); // Mengatur tanggal mulai jangka waktu (7 hari sebelumnya)
        $endDate = Carbon::now(); // Mengatur tanggal akhir jangka waktu (tanggal saat ini)

        $topAnime = Anime::select('*')
        ->whereBetween('created_at', [$startDate, $endDate]) // Mengatur rentang tanggal
        ->orderBy('click', 'desc')
        ->take(5)
        ->get();

        $topCharacter = Character::select('*')
        ->whereBetween('created_at', [$startDate, $endDate]) // Mengatur rentang tanggal
        ->orderBy('click', 'desc')
        ->take(5)
        ->get();

        $threadall = DB::table('threads')
        ->orderByDesc('created_at')
        ->take(20)
        ->get();
        return view('landingpage',[
           'title' => 'Wibu.com', 'topAnime' => $topAnime, 'threadall' => $threadall, 'topCharacter'=> $topCharacter
      ]);
    }
}
