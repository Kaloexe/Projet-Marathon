<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="La Vik Team">

    <title>VikGames</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="icon" href="{{asset('images/favicon.ico')}}">

</head>
<body  class="bg-grey font-sans leading-normal tracking-normal">
<!--Nav-->
<nav class="bg-dark p-2 mt-0 w-full"> <!-- Add this to make the nav fixed: "fixed z-10 top-0" -->
    <div class="container mx-auto flex flex-wrap items-center">
        <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
            <p class="text-white no-underline hover:text-white hover:no-underline" href="#">
                <span class="text-2xl pl-2">VikGames</span>
            </p>
        </div>
        <div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                    <a href="{{ url('/dashboard') }}" class="text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4">Page d'accueil</a>
                @else
                    <a href="{{ route('login') }}" class="text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4">Connexion</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4">Enregistrement</a>
                    @endif
                @endauth
            </div>

        </div>
    </div>
</nav>

<!--Hero-->
<div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
    <!--Left Col-->
    <div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-12 pb-24 px-6">
        <p class="uppercase tracking-loose">IUT de Lens - Département Informatique</p>
        <h1 class="font-bold text-3xl my-4">Boutique de jeux</h1>
        <p class="leading-normal mb-4">Projet marathon 2020</p>
    </div>
    <!--Right Col-->
    <div class="w-full lg:w-1/2 lg:py-6 text-center">
        <!--Add your product image here-->
        <img class=img-responsive src="{{asset('img/imageonline-co-whitebackgroundremoved.png')}}"/>
    </div>

</div>

@section('scripts')
    <script src="{{ asset('js/main.js')}}"></script>
    <script src="{{ asset('img/app.js')}}"></script>
@show

</body>
</html>
