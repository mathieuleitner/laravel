@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<form class="jumbotron mt-3 col-md-5" method="POST" action="{{ route('cinema.update', $cinema->id) }}">
    {{ csrf_field() }}
    {{method_field('PUT')}}
    <h1 class="display-4 font-italic">Le Formulaire des CINEMAS</h1>
    
    <p class="mb-3">
        <label for="nom_cinema">Nom</label>
        <input class="form-control" type="text" name="nom_cinema" id="nom_cinema" value="{{ $cinema->nom_cinema }}" required />
        
        @if ($errors->has('nom_cinema'))  
        <div class="feedback">
            {{ $errors->first('nom_cinema') }}
        </div>
        @endif
        
    </p>
    
    <p class="mb-3">
        <label for="arrondissement">Arrondissement</label>
        <input class="form-control" type="text" name="arrondissement" id="arrondissement" value="{{ $cinema->arrondissement }}" required />
        
        @if ($errors->has('arrondissement'))  
        <div class="feedback">
            {{ $errors->first('arrondissement') }}
        </div>
        @endif
    </p>
    
    <p class="mb-3">
        <label for="adresse">Adresse</label>
        <input class="form-control" type="text" name="adresse" id="adresse" value="{{ $cinema->adresse }}" required />
        
    </select>
    
    @if ($errors->has('adresse'))  
    <div class="feedback">
        {{ $errors->first('adresse') }}
    </div>
    @endif
</p>

<button class="btn btn-primary btn-lg" type="submit">Créer</button>
<form>
    
    @endsection