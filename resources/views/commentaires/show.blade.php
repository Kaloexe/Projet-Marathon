<p>{{$commentaire->commentaire}}</p>
<p>{{$commentaire->datecom}}</p>
<p>{{$commentaire->note}}</p>
<div>
    <a href="{{ URL::route('commentaire.delete',['id'=> $commentaire->id, 'action'=>'valide'])}}" class="btn btn-primary">Valider</a>
    <a href="{{ URL::route('commentaire.delete',['id'=> $commentaire->id, 'action'=>'annule'])}}" class="btn btn-primary">Annuler</a>
</div>
