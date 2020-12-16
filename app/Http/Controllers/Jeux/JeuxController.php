<?php

namespace App\Http\Controllers\Jeux;

use App\Http\Controllers\Controller;
use App\Models\Jeu;
use Illuminate\Http\Request;

class JeuxController extends Controller
{
    public function index() {
        $jeux = Jeu::all();
        return view('Jeux.index', compact('jeux'));
    }
    public function add()
    {
        return view('jeux_add');
    }

    public function randomGames(){
        $randomGames = Jeu::inRandomOrder()->limit(5)->get();
        return view('Jeux.index', compact('randomGames'));
    }
}
