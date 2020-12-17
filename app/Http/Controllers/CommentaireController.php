<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{

    public function show(Request $request, $id) {
        $action = $request->query('action', 'show');
        $commentaire = Commentaire::find($id);

        return view('commentaires.show', ['commentaire' => $commentaire, 'action' => $action]);
    }

//    public function delete(Request $request, $id)
//    {
//        $this->authorize('delete', Commentaire::find($id));
//
//        $action = $request->get('action', 'annule');
//        $commentaire = Commentaire::find($id);
//        $jeu_id = $commentaire->jeu->id;
//        if ($action == 'valide') {
//            $commentaire->delete();
//        }
//        return redirect()->route('jeu_show', ['id' => $jeu_id]);
//    }



    public function delete(Request $request, $id) {
        $commentaire = Commentaire::find($id);
        $user = Auth::user();
        $jeu_id = $commentaire->jeu->id;
        if ($user->can('delete', $commentaire)  || $user->can('isAdmin',$commentaire) )  {
            $commentaire->delete();
            return redirect()->route('jeu_show', ['id' => $jeu_id])->with('status', 'Commentaire supprimé');
        } else {
            return redirect()->route('jeu_show', ['id' => $jeu_id])->with('status', 'Impossible de supprimer le commentaire');
        }
    }


}
