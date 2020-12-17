<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{

    public function show(Request $request, $id) {
        $action = $request->query('action', 'show');
        $commentaire = Commentaire::find($id);

        return view('commentaires.show', ['commentaire' => $commentaire, 'action' => $action]);
    }

    public function delete(Request $request, $id) {
//        $this->authorize('delete', Commentaire::find($id));

        $action = $request->get('action','annule');
        $commentaire = Commentaire::find($id);
        $jeu_id = $commentaire->jeu->id;
        if ($action=='valide') {
            $commentaire->delete();
        }
        return redirect()->route('jeu_show',['id' => $jeu_id]);
    }




}
