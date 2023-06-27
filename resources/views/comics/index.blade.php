@extends('layouts.main')

@section('content')

@section('title')
    Elenco fumetti
@endsection

<div class="container my-5">
    <h1>Elenco fumetti</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                {{-- <th scope="col">Descrizione</th>
                <th scope="col">Copertina</th> --}}
                <th scope="col">Serie</th>
                <th scope="col">Tipo</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    {{-- <td>{{ $comic->description }}</td> --}}
                    {{-- <td>{{ $comic->thumb }}</td> --}}
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <a href="{{ route("comics.show" , $comic) }}" class="btn btn-success">VAI</a>
                        <a href="#" class="btn btn-primary">MODIFICA</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>


@endsection
