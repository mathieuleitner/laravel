@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<form class="jumbotron mt-3 col-md-5" method="POST" action="{{ route('artiste.update', $artiste->id) }}">
       
        {{ csrf_field() }}
        {{method_field('PUT')}} <!-- HTML n'accepte que POST et GET -->

        <h1 class="display-4 font-italic">Le Formulaire</h1>

        <p class="mb-3">
            <label for="prenom">Prenom</label>
        <input class="form-control" type="text" name="prenom" id="prenom" value="{{ $artiste->prenom }}" required />
            
            @if ($errors->has('prenom'))  
            <div class="feedback">
                {{ $errors->first('prenom') }}
            </div>
            @endif

        </p>

        <p class="mb-3">
            <label for="nom">Nom</label>
            <input class="form-control" type="text" name="nom" id="nom" value="{{ $artiste->nom }}" required />

            @if ($errors->has('nom'))  
            <div class="feedback">
                {{ $errors->first('nom') }}
            </div>
            @endif
        </p>

        <p class="mb-3">
            <label for="annee_naissance">Année naissance</label>
            <input class="form-control" type="text" name="annee_naissance" id="annee_naissance" value="{{ $artiste->annee_naissance }}" required />

            @if ($errors->has('annee_naissance'))  
            <div class="feedback">
                {{ $errors->first('annee_naissance') }}
            </div>
            @endif
        </p>
       
        <button class="btn btn-primary btn-lg" type="submit">Modifier</button>
    <form>

@endsection