<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class readUser extends Controller
{
    public function showUser(){
        $user= DB::table('users')->get();
        return view('user', ['users'=>$user]);
    }
}
