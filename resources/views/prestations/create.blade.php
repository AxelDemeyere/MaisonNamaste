@extends('layouts.app')
@section('content')
    <div class="mx-auto col-8">
        <div class="my-5">
        <h2>Nouvelle prestation</h2>
    </div>

        <form class="d-flex flex-column" action="" method="post">
            @csrf
            <label for="name">Nom de la prestation :</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <label for="details">Détails :</label>
            <textarea name="details" id="details" cols="10" rows="2" value="{{ old('details') }}"></textarea>
            @error('details')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <label for="price">Prix de la prestation</label>
            <input type="text" name="price" id="price" value="{{ old('price') }}">
            @error('price')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <label for="time">Temps de la prestation</label>
            <input type="text" name="time" id="time" value="{{ old('time') }}">
            <button>Confirmer</button>
            </form>
        </div>
@endsection
