<html>
<head>
    <title>Liste des jeux</title>
</head>
<body>
<h2>La liste des jeux</h2>

@if(!empty($jeux))
    <ul>
        @foreach($jeux as $jeu)
            <li>{{$jeu->nom}} {{$jeu->description}} {{$jeu->regles}} {{$jeu->langue}} {{$jeu->langue}} {{$jeu->url_media}} {{$jeu->age}}
                {{$jeu->nombre_joueurs}} {{$jeu->categorie}} {{$jeu->duree}}

            </li>
        @endforeach
    </ul>
@else
    <h3>Aucun jeu</h3>
@endif



