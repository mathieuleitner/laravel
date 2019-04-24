@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<form class="jumbotron mt-3 col-md-5" method="POST" action="{{ route('salle.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <h1 class="display-4 font-italic">Le Formulaire des Salles</h1>

    <div class="mb-3">
        <label for="numero">Numéro</label>
        <input class="form-control" type="text" name="numero" id="numero" value="{{ $salle->numero }}" required />
        
        @if ($errors->has('numero'))  
        <div class="feedback">
            {{ $errors->first('numero') }}
        </div>
        @endif

    </div>

    <div class="mb-3">
        <label for="capacite">Capacité</label>
        <input class="form-control" type="text" name="capacite" id="capacite" value="{{ $salle->capacite }}" required />

        @if ($errors->has('capacite'))  
        <div class="feedback">
            {{ $errors->first('capacite') }}
        </div>
        @endif
    </div>

    <div class="mb-3">
        <label for="climatisation">Climatisation</label>
        <select class="form-control" type="" name="climatisation" id="climatisation" value="{{ $salle->climatisation }}" required>
            <option value="1">yes</option>
            <option value="0">no</option>
        </select>

        @if ($errors->has('climatisation'))  
        <div class="feedback">
            {{ $errors->first('climatisation') }}
        </div>
        @endif
    </div>

    <p class="mb-3">
        <label for="cinemas_id">Cinémas</label>
        <select class="form-control" type="" name="cinemas_id" id="cinemas_id" value="" required>
            
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
   
    <button class="btn btn-primary btn-lg" type="submit">Modifier</button>
<form>

@endsection