<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeuController;
use App\Http\Controllers\ProfilController;


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


//Route::middleware(['auth:sanctum', 'verified'])->resource('dashboard', 'App\Http\Controllers\Jeux\AddController');
//Route::middleware(['auth:sanctum', 'verified'])->resource('jeu.listeJeux', 'App\Http\Controllers\JeuController');
Route::middleware(['auth:sanctum', 'verified'])->resource('jeu.listeJeux', 'App\Http\Controllers\JeuController');
Route::middleware(['auth:sanctum', 'verified'])->resource('profil', 'App\Http\Controllers\ProfilController');

Route::get('/dashboard',"\App\Http\Controllers\JeuController@randomGames");

Route::get('tri', [JeuController::class, 'tri'])->name('listeJeuxTri');
Route::get('/listeJeux',"\App\Http\Controllers\JeuController@index")->name('listeJeux');
Route::get('listeJeuxPages/{nb?}', [JeuController::class, 'list'])->name('pagination');
Route::get('listeJeuxTheme/{nb?}', [JeuController::class, 'indexTheme'])->name('listeJeuxTheme');
Route::get('listeJeuxMecanique/{nb?}', [JeuController::class, 'indexMecanique'])->name('listeJeuxMecanique');
Route::get('/jeu/{id}', [JeuController::class, 'show'])->name('jeu_show');
Route::get('/jeu/{id}/tri', [JeuController::class, 'triChrono'])->name('showTri');
Route::get('/regles/{id}', [JeuController::class, 'regles'])->name('jeu_regles');
Route::get('/commentaire/{id}',[\App\Http\Controllers\CommentaireController::class, 'show'])->name('commentaire.show');
Route::get('/commentaire/delete/{id}',[\App\Http\Controllers\CommentaireController::class, 'delete'])->name('commentaire.delete');
Route::get('/meilleur',"\App\Http\Controllers\JeuController@bestGames");
Route::get('liste/{nb?}',[JeuController::class, 'list'])->name('pagination');

Route::get('/profil', [ProfilController::class,'index'])->name('profil')->middleware('auth');
Route::get('/achatjeu', [ProfilController::class,'addAchat'])->name('achatjeu')->middleware('auth');
Route::get('/supprimer/{id}', [ProfilController::class,'removeAchat'])->name('supprimerA')->middleware('auth');
Route::get('/afficheachat', [ProfilController::class,'afficheAchat'])->name('afficheachat')->middleware('auth');

Route::post('/commentaire/store',"\App\Http\Controllers\AddController@commentairestore")->name('commentaire.store')->middleware('auth');
Route::post('/profil', [ProfilController::class,'storeAchat'])->name('storeAchat')->middleware('auth');
Route::post('/formulaire', [JeuController::class, 'store'])->name('jeu_store')->middleware('auth');
