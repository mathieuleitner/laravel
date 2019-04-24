@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<table class="container table table-striped table-centered">
    <thead>
        <tr>
            <th>{{__('Titre')}}</th>
            <th>{{__('Année')}}</th>
            <th>{{__('Réalisateur')}}</th>
            <th>{{__('Actions')}}</th>           
        </tr>
    </thead>
    <tbody>
        @foreach($films as $film)
        <tr>
            <td>{{$film->titre}}</td>
            <td>{{$film->annee}}</td>
            <td>{{$film->displayRealisateur()}}</td>

            <td class="table-action">

                <a type="button" href="{{ route('film.edit', $film->id) }}" class="btn btn-sm" 
                    data-toggle="toolip" title="@lang('Modifier l\'film') {{ $film->titre }}">
                    <i class="fa fa-edit"></i>
                </a>

                <a type="button" href="{{ route('film.destroy', $film->id) }}" class="btn btn-danger btn-sm delete" 
                    data-toggle="toolip" title="@lang('Supprimer l\'film') {{ $film->titre }}">
                    <i class="fa fa-trash" style="color: red;"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="container">
    <a type="button" class="btn btn-sm" href="{{ route('film.create') }}"">
        Créer
    </a>
</div>
<div class="container">
        {{ $films->appends(request()->except('page'))->links() }}
</div>

@endsection