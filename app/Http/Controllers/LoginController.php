<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login', [
           'title' => 'Login'
      ]);
    }

    protected function authenticated(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:255'
        ]);

        if(auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

//        if ($user->admin) {
//          return redirect()->route('admin.dashboard');
//        }

        return back()-> with('loginFailed', 'LOGIN FAILED!');
    }

    // Proses logout
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
