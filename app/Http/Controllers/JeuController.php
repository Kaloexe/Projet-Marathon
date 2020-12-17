<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jeu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class JeuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index() {
        $jeux = Jeu::all();
        return view('jeu.listeJeux', ['jeux' => $jeux]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id){
        $jeu = Jeu::find($id);
        return view('jeu.show', ['jeu' => $jeu]);
    }

    public function regles($id){
        $jeu = Jeu::find($id);
        return view('jeu.regles', ['jeu' => $jeu]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function store(Request $request)
    {

        $request->validate(
            [
                'nom' => 'required|unique:jeux',
                'description' => 'required',
                'theme' => 'required',
                'editeur' => 'required',
            ],
            [
                'nom.required' => 'Le nom est requis',
                'nom.unique' => 'Le nom doit être unique',
                'description.required' => 'La description est requise',
                'theme.required' => 'Le théme est requis',
                'editeur.required' => 'L\'editeur est requis',
            ]
        );

        $jeu = new Jeu();
        $jeu->nom = $request->nom;
        $jeu->description = $request->description;
        $jeu->theme_id = $request->theme;
        $jeu->user_id = Auth::user()->id;
        $jeu->editeur_id = $request->editeur;
        $jeu->url_media = 'https://picsum.photos/seed/%27.$jeu-%3Enom.%27/200/200';

        $jeu->save();

        return Redirect::route('listeJeux');
    }

    public function add()
    {
        return view('jeux_add');
    }

    public function randomGames(){
        $randomGames = Jeu::inRandomOrder()->limit(5)->get();
        return view('jeu.index', compact('randomGames'));
    }

    function tri() {
        $jeux = Jeu::all()->sortBy('nom');

        return view('jeu.tri', ['jeux' => $jeux]);
    }
    function triChrono($id){
        $jeu = Jeu::find($id);

        return view('jeu.showTri', ['jeu' => $jeu]);
    }
    function triEditeur() {
        $jeux = Jeu::all();

        return view('jeu.groupeEditeur', ['jeux' => $jeux]);
    }
}
