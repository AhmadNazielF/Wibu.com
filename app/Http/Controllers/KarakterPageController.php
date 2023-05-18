<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\fanart;
use App\Models\character;
use App\Models\anime;
class KarakterPageController extends Controller
{
    public function index($slug){
        $character=character::where('slug','LIKE',$slug)->first();
        $fanart=DB::table('fanarts')->where('character_id',$character->id)->get();
        
        return view('karakterpage', [
           'title' => 'KARAKTER','fanart' => $fanart,'karakter' => $character
      ]);
    }
    public function fanart(){
        $karakter=DB::table('characters')->get();
        return view('admin.newFanart',[
            'title' => 'Upload Fanart', 'karakter' => $karakter
        ]);
    }
    public function upFanart(Request $request){
        // dd($request->image);
        $karakter = DB::table('characters')
    ->where('nama', 'LIKE', '%' . $request->karakter . '%')
    ->first();
    $character_id = $karakter->id;

        if($request->file('image')){
            $link = 'foto/'.time().'-'.$request->image->getClientOriginalName();
            $request->image->move('foto', $link);
        }
        fanart::create([
            'character_id' => $character_id,
            'image'=>$link
        ]);
        return redirect()->back();
    }
    public function create()
    {
        $anime=anime::all();
        return view('admin.newKarakter',['title'=>'Karakter','anime'=>$anime]);
    }
    public function store(Request $request){
        $anime=DB::table('animes')->where('judul', 'LIKE', '%' . $request->anime)->get();
        $anime_id=null;
        if($anime){
            $anime_id=$anime->id;
        }
        if($request->file('image')){
            $link = 'foto/'.time().'-'.$request->image->getClientOriginalName();
            $request->image->move('foto', $link);
       }
       character::create([
           'nama'=>$request['nama'],
           'slug' => strtolower(str_replace(' ', '_', $request->nama)),
           'umur'=>$request['umur'],
           'status'=>$request['status'],
           'image'=>$link,
           'gender'=>$request['gender'],
           'tinggi'=>$request['tinggi'],
           'deskripsi'=>$request['deskripsi'],
           'penampilan'=>$request['penampilan'],
           'sejarah'=>$request['sejarah'],
           'anime_id'=>$anime_id,
        ]);
        return redirect()->back();
    }
}
