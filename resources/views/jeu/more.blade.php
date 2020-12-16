@extends('show')
@section('informations')
    salut
{{--    {{$jeu->nom}}--}}

{{--    <div class="row justify-content-center">--}}

{{--        <div class="col-6 ">--}}
{{--            <div class="card">--}}
{{--                <img src="{{ url($jeu->url_media) }}" class="card-img-top" alt="...">--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title">{{ $jeu->nom }}</h5>--}}
{{--                    <p class="card-text">--}}
{{--                    {{ $jeu->description }}--}}
{{--        <hr>--}}
{{--            {{ $jeu->theme->nom }}--}}
{{--        <hr>--}}
{{--            @foreach ( $jeu->mecaniques as $key => $mecaniques)--}}
{{--                @if ($key !== 0)--}}
{{--                    &nbsp;-&nbsp;--}}
{{--                                @endif--}}
{{--                {{ $mecaniques->nom }}--}}
{{--            @endforeach--}}
{{--                <hr>--}}
{{--                    {{ $jeu->categorie }}--}}
{{--                <hr>--}}
{{--                    Age recommandé : {{ $jeu->age }}--}}
{{--                <hr>--}}
{{--                    {{ $jeu->langue }}--}}
{{--                <hr>--}}
{{--                    {{ $jeu->theme->nom }}--}}
{{--                <hr>--}}
{{--                    Edité par {{ $jeu->editeur->nom }}--}}
{{--                <hr>--}}
{{--                    Durée : {{ $jeu->duree }}--}}
{{--                <hr>--}}
{{--                    Nombre de joueur : {{ $jeu->nombre_joueurs }}--}}
{{--                </p>--}}
{{--                <hr><hr>--}}
{{--                <a href="{{ URL::route('regles', $jeu->id) }}" class="btn btn-primary">Regarder les règles du jeu</a>--}}
{{--                <hr><hr>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <a href="{{ URL::route('listeJeux') }}" class="btn btn-secondary">Retour à la liste des jeux</a>--}}

@endsection
