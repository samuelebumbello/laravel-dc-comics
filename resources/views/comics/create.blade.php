@extends('layouts.main')

@section('content')

@section('title')
    Inserisci nuovo fumetto
@endsection

<div class="container my-5">

    <h1 class="text-center p-4">Creazione nuovo fumetto</h1>

    <form action="{{ route("comics.store") }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Inserisci titolo</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Inserisci copertina</label>
            <input type="text" class="form-control" name="thumb" id="thumb">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Inserisci serie</label>
            <input type="text" class="form-control" name="series" id="series">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Inserisci tipo</label>
            <input type="text" class="form-control" name="type" id="type">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <button type="subtmit" class="btn btn-primary">INVIA</button>
    </form>

</div>


@endsection
