<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeuController;

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
    return view('welcome');
});

Route::get('/enonce', function () {
    return view('enonce.index');
});



Route::get('/formulaire' , function() {
    return view('formulaire');
});


Route::middleware(['auth:sanctum', 'verified'])->resource('regles', 'App\Http\Controllers\RegleController');
Route::middleware(['auth:sanctum', 'verified'])->resource('jeu.listeJeux', 'App\Http\Controllers\JeuController');

Route::get('/dashboard',"\App\Http\Controllers\Jeux\JeuxController@randomGames");
Route::get('/listeJeux',"\App\Http\Controllers\JeuController@index");
Route::get('/tri', [JeuController::class, 'tri'])->name('listeJeux');
Route::get('/show/{id}', [JeuController::class, 'show'])->name('jeu_show');
/*
Route::middleware(['auth:sanctum', 'verified'])->resource('dashboard', 'App\Http\Controllers\Jeux\AddController');
*/

