@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<form class="jumbotron mt-3 col-md-5" method="POST" action="{{ route('seance.store') }}">
    {{ csrf_field() }}
    <h1 class="display-4 font-italic">Le Formulaire des SEANCES</h1>
    
    <p class="mb-3">
        <label for="film_id">Film</label>
        <select class="form-control" type="" name="film_id" id="film_id" value="" required>
            
            @foreach($films as $film)
            
            <option value="{{$film->id}}">{{$film->titre}}</option>
            
            @endforeach
            
        </select>
        
        @if ($errors->has('annee'))  
        <div class="feedback">
            {{ $errors->first('annee') }}
        </div>
        @endif
    </p>
    
    <p class="mb-3">
        <label for="cinema_id">Cinema</label>
        <select class="form-control" type="" name="cinema_id" id="cinema_id" value="" required>
            
            @foreach($cinemas as $cinema)
            
            <option value="{{$cinema->id}}">{{$cinema->nom_cinema}}</option>
            
            @endforeach
            
        </select>
        
        @if ($errors->has('annee'))  
        <div class="feedback">
            {{ $errors->first('annee') }}
        </div>
        @endif
    </p>
    
    <p class="mb-3">
        <label for="salles_id">Salle</label>
        <select class="form-control" type="" name="salles_id" id="salles_id" value="" required>
            
            @foreach($salles as $salle)
            
            <option value="{{$salle->id}}">{{$salle->numero}}</option>
            
            @endforeach
            
        </select>
        
        @if ($errors->has('annee'))  
        <div class="feedback">
            {{ $errors->first('annee') }}
        </div>
        @endif
    </p>
    
    <p class="mb-3">
        <label for="titre">Durée</label>
        <input class="form-control" type="text" name="duree" id="duree" value="" required />
    </p>
    
    <p class="mb-3">
        <label for="jour">Jour</label>
        <input class="form-control" type="date" name="jour" id="jour" value="" required />
    </p>
    
    <p class="mb-3">
        <label for="heure_debut">Heure</label>
        <input class="form-control" type="time" name="heure_debut" id="heure_debut" value="" required />       
    </p>
    
    <button class="btn btn-primary btn-lg" type="submit">Créer</button>
    
    <form>
        
@endsection