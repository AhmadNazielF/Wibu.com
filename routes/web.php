<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AnimePageController;
use App\Http\Controllers\KarakterPageController;
use App\Http\Controllers\AnimePopulerController;
use App\Http\Controllers\KarakterPopulerController;
use App\Http\Controllers\ThreadController;
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

Route::get('/listthread', [ThreadController::class, 'index']);
Route::get('/createThread',  [ThreadController::class, 'create'])->middleware('auth');
Route::get('/isithread', [ThreadController::class, 'isi']);
Route::get('/comment', [ThreadController::class, 'comment']);

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

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/test', function () {
    return view('test');
});


route::get('/test', [HomePageController::class, 'index']);

route::get('/', [LandingPageController::class, 'index']);

route::get('animepage', [AnimePageController::class, 'index']);

route::get('karakterpage', [KarakterPageController::class, 'index']);

route::get('animepopuler', [AnimePopulerController::class, 'index']);

route::get('karakterpopuler', [KarakterPopulerController::class, 'index']);

route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
route::post('/login', [LoginController::class, 'authenticated']);
route::post('/logout', [LoginController::class, 'logout']);

route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
route::post('/register', [RegisterController::class, 'store']);
