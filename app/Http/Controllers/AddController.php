<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jeu;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function index() {
        $jeux = Jeu::all();
        return view('Jeux.index', compact('jeux'));
    }
    public function add()
    {
        return view('jeux_add');
    }
}
