@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<table class="container table table-striped table-centered">
    <thead>
        <tr>
            <th>{{__('Numéro')}}</th>
            <th>{{__('Capacité')}}</th>
            <th>{{__('Climatisation')}}</th>
            <th>{{__('Cinéma')}}</th>
            <th>{{__('Actions')}}</th>           
        </tr>
    </thead>
    <tbody>
        @foreach($salles as $salle)
        <tr>
            <td>{{$salle->numero}}</td>
            <td>{{$salle->capacite}}</td>
            <td>{{$salle->displayClimatisation()}}</td>
            <td>{{$salle->displayCinema()}}</td>
            <td class="table-action">

                <a type="button" href="{{ route('salle.edit', $salle->id) }}" class="btn btn-sm" 
                    data-toggle="toolip" title="@lang('Modifier l\'artiste') {{ $salle->id }}">
                    <i class="fa fa-edit"></i>
                </a>

                <a type="button" href="{{ route('salle.destroy', $salle->id) }}" class="btn btn-danger btn-sm delete" 
                    data-toggle="toolip" title="@lang('Supprimer la salle') {{ $salle->id }}">
                    <i class="fa fa-trash" style="color: red;"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="container">
    <a type="button" class="btn btn-sm" href="{{ route('salle.create') }}"">
        Créer
    </a>
</div>
<div class="container">
        {{ $salles->appends(request()->except('page'))->links() }}
</div>

@endsection