<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
        $users = User::all();
        return view('profil', ['users' => $users]);
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
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addGame(Request $request)
    {
        $request->validate(
            [
                'nom' => 'required|unique:jeux',
                'lieu' => 'required',
                'prix' => 'required',
                'date_achat' => 'required',
            ],
            [
                'nom.required' => 'Le nom est requis',
                'nom.unique' => 'Le nom doit être unique',
                'lieu.required' => 'La lieu est requis',
                'prix.required' => 'Le prix est requis',
                'date_achat.required' => 'La date est requise',
            ]
        );

        $achat = new Achat();
        //$achat->nom = $request->nom;
        $achat->lieu = $request->lieu;
        $achat->prix = $request->prix;
        $achat->date_achat = $request->date_achat;
        $achat->save();

        return Redirect::route('profil');
    }
}
