<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('autentikasi.register', [
           'title' => 'Register'
      ]);
    }


   public function store(Request $request)
   {
        $validateData = $request->validate([
            'name' => ['required', 'min:4', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::Create($validateData);

        return redirect('/');
   }
}
