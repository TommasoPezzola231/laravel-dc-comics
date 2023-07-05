@extends('layouts.app')

@section('content')
    <div class="container-fluid px-5">

        <h1>{{ $comicbook->title }}</h1>
        <div class="col-2">
            <img src="{{ $comicbook->thumb }}">
        </div>

        <div class="my-2 pe-5">
            {{ $comicbook->description }}
        </div>

        <div class="d-flex">
            <div class="col-1">
                Attori:
            </div>

            <div class="col-10">
                {{ $comicbook->artists }}
            </div>

        </div>

        <div class="d-flex">
            <div class="col-1">
                Scrittori:
            </div>

            <div class="col-10">
                {{ $comicbook->writers }}
            </div>

        </div>

        <div>    
            <small>{{ $comicbook->price }}</small>
            <button class="btn btn-primary my-3">Acquista</button>
        </div>

        <a href="{{ route('comicbook.index') }}">Torna indietro</a>
    </div>


@endsection