<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AnimePageController;
use App\Http\Controllers\KarakterPageController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\KarakterController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ThreadShow;
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
// Route::get('/isithread', [ThreadController::class, 'isi']);
Route::post('/store', [ThreadController::class, 'store']);
Route::get('/thread/{slug}',[ThreadController::class, 'thread']);
Route::post('/thread/{slug}', [ThreadController::class, 'insertComment'])->middleware('auth');

Route::get('/animepage', function () {
    return view('animepage',);
});

Route::get('/animepopuler', function () {
    return view('animepopuler',[
        'title' => 'Anime Populer'
    ]);
});

Route::get('/karakterpage', function () {
    return view('karakterpage');
});

Route::get('/karakterpopuler', function () {
    return view('karakterpopuler',[
        'title' => 'Anime Populer'  
    ]);
});

Route::get('/login', function () {
    return view('autentikasi.login');
});

Route::get('/register', function () {
    return view('autentikasi.register');
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

Route::get('/new-anime', function () {
    return view('admin.newAnime');
});

route::get('/new-anime', [AnimeController::class, 'index']);
route::post('/new-anime', [AnimeController::class, 'store']);

route::get('/new-karakter', [KarakterController::class, 'index']);

route::get('/test', [HomePageController::class, 'index']);

route::get('/', [LandingPageController::class, 'index']);

route::get('animepage', [AnimePageController::class, 'index']);

route::get('karakterpage', [KarakterPageController::class, 'index']);
route::get('/newfanart', [KarakterPageController::class, 'fanart']);
route::post('/newfanart', [KarakterPageController::class, 'upFanart']);

route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
route::post('/login', [LoginController::class, 'authenticated']);
route::post('/logout', [LoginController::class, 'logout']);

route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
route::post('/register', [RegisterController::class, 'store']);

//route::post('create-anime', [AnimeController::class]);