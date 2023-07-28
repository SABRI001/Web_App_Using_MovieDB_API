<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\FavoriteMovieController;
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
// routes/web.php


Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/favorites', [FavoriteMovieController::class, 'index'])->name('favorites.index');
// routes/web.php

Route::post('/favorite', [MovieController::class, 'favorite'])->name('movie.favorite');
Route::post('/favorite-movies', [FavoriteMovieController::class, 'store'])->name('favorite.movies.store');

//
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::post('/favorite-movies', [FavoriteMovieController::class, 'store'])->name('favorite.movies.store');
Route::get('/favorite-movies', [FavoriteMovieController::class, 'index'])->name('favorite.movies.index');
Route::get('/', function () {
    return view('welcome');
});
