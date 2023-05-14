<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/listSThread', function () {
    return view('listThread');
});

Route::get('/animepage', function () {
    return view('animepage');
});

Route::get('/animepopuler', function () {
    return view('animepopuler');
});

Route::get('/karakterpage', function () {
    return view('karakterpage');
});

Route::get('/karakterpopuler', function () {
    return view('karakterpopuler');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/homepage', function () {
    return view('homepage');
});


Route::get('/test', function () {
    return view('test');
});

route::get('/test', [HomePageController::class, 'index']);

route::get('/login', [LoginController::class, 'index'])->middleware('guest');
route::post('/login', [LoginController::class, 'authenticated']);

route::get('/register', [RegisterController::class, 'index']);
route::post('/register', [RegisterController::class, 'store']);