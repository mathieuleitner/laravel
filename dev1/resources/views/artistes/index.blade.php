@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<table class="container table table-striped table-centered">
    <thead>
        <tr>
            <th>{{__('Prenom')}}</th>
            <th>{{__('Nom')}}</th>
            <th>{{__('Année de Naissance')}}</th>
            <th>{{__('Actions')}}</th>           
        </tr>
    </thead>
    <tbody>
        @foreach($artistes as $artiste)
        <tr>
            <td>{{$artiste->prenom}}</td>
            <td>{{$artiste->nom}}</td>
            <td>{{$artiste->annee_naissance}}</td>
            <td class="table-action">

                <a type="button" href="{{ route('artiste.edit', $artiste->id) }}" class="btn btn-sm" 
                    data-toggle="toolip" title="@lang('Modifier l\'artiste') {{ $artiste->nom }}">
                    <i class="fa fa-edit"></i>
                </a>

                <a type="button" href="{{ route('artiste.destroy', $artiste->id) }}" class="btn btn-danger btn-sm delete" 
                    data-toggle="toolip" title="@lang('Supprimer l\'artiste') {{ $artiste->nom }}">
                    <i class="fa fa-trash" style="color: red;"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="container">
    <a type="button" class="btn btn-sm" href="{{ route('artiste.create') }}"">
        Créer
    </a>
</div>
<div class="container">
        {{ $artistes->appends(request()->except('page'))->links() }}
</div>

@endsection