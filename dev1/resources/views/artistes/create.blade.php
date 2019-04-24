@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<form class="jumbotron mt-3 col-md-5" method="POST" action="{{ route('artiste.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h1 class="display-4 font-italic">Le Formulaire des ARTISTES</h1>

        <div class="mb-3">
            <label for="prenom">Prénom</label>
            <input class="form-control" type="text" name="prenom" id="prenom" value="" required />
            
            @if ($errors->has('prenom'))  
            <div class="feedback">
                {{ $errors->first('prenom') }}
            </div>
            @endif

        </div>

        <div class="mb-3">
            <label for="nom">Nom</label>
            <input class="form-control" type="text" name="nom" id="nom" value="" required />

            @if ($errors->has('nom'))  
            <div class="feedback">
                {{ $errors->first('nom') }}
            </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="annee_naissance">Année naissance</label>
            <input class="form-control" type="text" name="annee_naissance" id="annee_naissance" value="" required />

            @if ($errors->has('annee_naissance'))  
            <div class="feedback">
                {{ $errors->first('annee_naissance') }}
            </div>
            @endif
        </div>
        {{--
        <div>
            <label for="poster">UPLOAD IMAGE</label>
            <input class="form-control" type="file" name="poster" id="poster" value="" required />
        </div>
        --}}
       
        <button class="btn btn-primary btn-lg" type="submit">Créer</button>
    <form>

@endsection