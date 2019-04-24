@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<table class="container table table-striped table-centered">
    <thead>
        <tr>
            <th>{{__('Film')}}</th>
            <th>{{__('Jour')}}</th>
            <th>{{__('Heure')}}</th>
            <th>{{__('Durée')}}</th>           
            <th>{{__('Cinéma')}}</th>      
            <th>{{__('Salles')}}</th>           
        </tr>
    </thead>
    <tbody>
        @foreach($seances as $seance)
        <tr>
            <td>{{$seance->display_film()}}</td>
            <td>{{$seance->display_jour()}}</td>
            <td>{{$seance->heure_debut}}</td>
            <td>{{$seance->duree}}</td>
            <td>{{$seance->display_cinema()}}</td>
            <td>{{$seance->display_salle()}}</td>
            
            <td class="table-action">

                <a type="button" href="{{ route('seance.edit', $seance->id) }}" class="btn btn-sm" 
                    data-toggle="toolip" title="@lang('Modifier la séance') {{ $seance->id }}">
                    <i class="fa fa-edit"></i>
                </a>

                <a type="button" href="{{ route('seance.destroy', $seance->id) }}" class="btn btn-danger btn-sm delete" 
                    data-toggle="toolip" title="@lang('Supprimer la séance') {{ $seance->id }}">
                    <i class="fa fa-trash" style="color: red;"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="container">
    <a type="button" class="btn btn-sm" href="{{ route('seance.create') }}"">
        Créer
    </a>
</div>


@endsection