<?php

use App\Http\Controllers\ComicBookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $navElements = config('store.navbarElements');
    $movies = config('comics');
    $infoList = config('store.infoList');
    return view('welcome', compact('navElements', 'movies', 'infoList'));
});

route::resource('comicbook', ComicBookController::class);
