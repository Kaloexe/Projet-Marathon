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
}
