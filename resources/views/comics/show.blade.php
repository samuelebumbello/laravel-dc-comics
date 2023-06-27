@extends('layouts.main')

@section('content')

@section('title')
    Dettagli
@endsection

<div class="container my-5">
    <h1 class="text-center p-4">{{ $comic->title }}</h1>

    <div class="row row-cols-3 d-flex justify-content-center">
        <div class="col">
            <img src="{{ $comic->thumb }}" alt="thumb" style="width: 70%">
        </div>
        <div class="col">
            <div class="series"><h4>{{ $comic->series }}</h4></div>
            <div class="description">{{ $comic->description }}</div>
        </div>
    </div>

</div>


@endsection
