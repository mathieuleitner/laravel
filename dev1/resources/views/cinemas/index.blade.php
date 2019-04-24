@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<table class="container table table-striped table-centered">
    <thead>
        <tr>
            <th>{{__('Nom')}}</th>
            <th>{{__('Arrondissement')}}</th>
            <th>{{__('Adresse')}}</th>       
        </tr>
    </thead>
    <tbody>
        @foreach($cinemas as $cinema)
        <tr>
            <td>{{$cinema->nom_cinema}}</td>
            <td>{{$cinema->arrondissement}}</td>
            <td>{{$cinema->adresse}}</td>

            <td class="table-action">

                <a type="button" href="{{ route('cinema.edit', $cinema->id) }}" class="btn btn-sm" 
                    data-toggle="toolip" title="@lang('Modifier le cinema') {{ $cinema->nom_cinema }}">
                    <i class="fa fa-edit"></i>
                </a>

                <a type="button" href="{{ route('cinema.destroy', $cinema->id) }}" class="btn btn-danger btn-sm delete" 
                    data-toggle="toolip" title="@lang('Supprimer le cinéma') {{ $cinema->titre }}">
                    <i class="fa fa-trash" style="color: red;"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="container">
    <a type="button" class="btn btn-sm" href="{{ route('cinema.create') }}"">
        Créer
    </a>
</div>
<div class="container">
        {{ $cinemas->appends(request()->except('page'))->links() }}
</div>

@endsection