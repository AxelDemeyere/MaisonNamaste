@extends('layouts.app')
@section('content')
<div class="mx-auto col-8 my-5">
    <h2>Mes prestations :</h2>
    <a href="/prestations/creer">Ajouter une nouvelle prestation</a>
</div>
    <div class="d-flex justify-content-center">
        <div class="d-flex flex-wrap gap-4 col-8 justify-content-center">
            @foreach ($prestations as $prestation)
                <div class="card shadow mb-5" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $prestation->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $prestation->price }}€ |
                            {{ $prestation->time }}
                            min.</h6>
                        <p class="card-text"> {{ $prestation->details }} </p>
                        <a href="/prestation/{{ $prestation->id }}/modifier" class="card-link">Modifier</a>
                        <a href="/prestation/{{ $prestation->id }}/supprimer" class="card-link">Supprimer</a>
                    </div>
                </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
