@extends('layouts.app')

@section('content')
    <a href="/prestations">Retour au prestations</a>
    <div class="card shadow mb-5" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $prestation->name }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $prestation->price }}€ | {{ $prestation->time }}
                min.</h6>
            <p class="card-text"> {{ $prestation->details }} </p>
            <a href="/prestation/{{ $prestation->id }}" class="card-link">Modifier</a>
            <a href="" class="card-link">Supprimer</a>
        </div>
    </div>
@endsection