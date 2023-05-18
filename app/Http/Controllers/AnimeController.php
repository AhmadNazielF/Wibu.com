<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anime;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.newAnime', [
            'title' => 'NEW ANIME'
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
        'judul' => 'required',
        'slug' => 'required|unique:animes'
        ]);

        if($request->file('image')){
            $link = 'foto/'.time().'-'.$request->image->getClientOriginalName();
            $request->image->move('foto', $link);
       }

        Anime::Create($validateData);
       
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $anime = Anime::find($id);


        return view('anime.show', compact('anime'));
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
                    
            $validatedData = $request->validate([
                'judul' => 'required',
                'slug' => 'required|unique:animes,slug,' . $id,

            ]);


            $anime = Anime::find($id);


            $anime->judul = $request->judul;
            $anime->slug = $request->slug;
   
            $anime->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anime = Anime::find($id);

        $anime->delete();
    }
}
