@extends('layouts.app')
@section('content')
    <div class="">
        <h2>Modifier {{$prestation->name}} </h2>

        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach

        <form class="d-flex flex-column col-6" action="" method="post">
            @csrf
            <label for="name">Nouveau nom :</label>
            <input type="text" name="name" id="name" value="{{ old('name', $prestation->name) }}">
            @error('name')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <label for="details">Détails :</label>
            <textarea name="details" id="details" cols="10" rows="2">{{ old('details', $prestation->details) }}</textarea>
            @error('details')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <label for="price">Prix de la prestation</label>
            <input type="text" name="price" id="price" value="{{ old('price', $prestation->price) }}">
            @error('price')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <label for="time">Temps de la prestation</label>
            <input type="text" name="time" id="time" value="{{ old('time', $prestation->time) }}">
            <button>Confirmer</button>
            </form>
        </div>
@endsection
