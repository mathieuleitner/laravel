@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<form class="jumbotron mt-3 col-md-5" method="POST" action="{{ route('film.store') }}">
    
        {{ csrf_field() }}
        <h1 class="display-4 font-italic">Le Formulaire des FILMS</h1>

        <p class="mb-3">
            <label for="titre">Titre</label>
            <input class="form-control" type="text" name="titre" id="titre" value="" required />
            
            @if ($errors->has('titre'))  
            <div class="feedback">
                {{ $errors->first('titre') }}
            </div>
            @endif

        </p>

        <p class="mb-3">
            <label for="annee">Année</label>
            <input class="form-control" type="text" name="annee" id="annee" value="" required />

            @if ($errors->has('annee'))  
            <div class="feedback">
                {{ $errors->first('annee') }}
            </div>
            @endif
        </p>

        <p class="mb-3">
            <label for="annee">Acteurs</label>
            <select class="form-control" type="" name="acteurs" id="acteurs" value="" multiple>
                
                @foreach($artistes as $artiste)

                <option value="{{$artiste->id}}">{{$artiste->nom}}</option>

                @endforeach

            </select>
        </p>

        <p class="mb-3">
            <label for="artiste_id">Réalisateur</label>
            <select class="form-control" type="" name="artiste_id" id="artiste_id" value="" required>
                
                @foreach($artistes as $artiste)

                <option value="{{$artiste->id}}">{{$artiste->nom}}</option>

                @endforeach

            </select>

            @if ($errors->has('annee'))  
            <div class="feedback">
                {{ $errors->first('annee') }}
            </div>
            @endif
        </p>
       
        <button class="btn btn-primary btn-lg" type="submit">Créer</button>
    <form>

@endsection