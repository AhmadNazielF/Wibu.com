<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\fanart;
class KarakterPageController extends Controller
{
    public function index($slug){
        $character=character::where('slug','LIKE',$slug)->first();
        $fanart=DB::table('fanarts')->where('character_id',$character->id)->get();
        
        return view('karakterpage', [
           'title' => 'KARAKTER'
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
}
