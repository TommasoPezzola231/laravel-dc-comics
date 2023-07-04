@extends('layouts.app')

@section('content')
    <div class="container-fluid px-5">

        <h1>{{ $comicBook->title }}</h1>
        <div class="col-2">
            <img src="{{ $comicBook->thumb }}">
        </div>

        <div class="my-2 pe-5">
            {{ $comicBook->description }}
        </div>

        <div class="d-flex">
            <div class="col-1">
                Attori:
            </div>

            <div class="col-10">
                {{ $comicBook->artists }}
            </div>

        </div>

        <div class="d-flex">
            <div class="col-1">
                Scrittori:
            </div>

            <div class="col-10">
                {{ $comicBook->writers }}
            </div>

        </div>

        <div>    
            <small>{{ $comicBook->price }}</small>
            <button class="btn btn-primary my-3">Acquista</button>
        </div>

        <a href="{{ route('comicbook.index') }}">Torna indietro</a>
    </div>


@endsection