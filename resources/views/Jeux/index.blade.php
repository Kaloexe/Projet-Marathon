@extends('dashboard')
@section('content')

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            @foreach($jeux as $jeu)
            <div class="my-3 py-3">
                <h2 class="display-5">{{$jeu->nom}}</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            @endforeach
        </div>
    </div>

@endsection
