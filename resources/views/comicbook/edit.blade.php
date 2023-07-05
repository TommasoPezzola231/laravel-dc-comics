@extends('layouts.app')

@section('content')

    <div class="container-fluid p-5">

        <form action="{{ route('comicbook.update', $comicbook->id) }}" method="POST">
            @csrf

            @method('PUT')
            
            <label for="title">Titolo</label>
            <input class="form-control" type="text" name="title" value="{{ $comicbook->title }}">
            
            <label for="description">Descrizione</label>
            <input class="form-control" type="text" name="description" value="{{ $comicbook->description }}">
            
            <label for="thumb">Link immagine</label>
            <input class="form-control" type="text" name="thumb" value="{{ $comicbook->thumb }}">
            
            <label for="price">Prezzo</label>
            <input class="form-control" type="text" name="price" value="{{ $comicbook->price }}">
            
            <label for="series">Serie</label>
            <input class="form-control" type="text" name="series" value="{{ $comicbook->series }}">

            <label for="sale_date">Data pubblicazione</label>
            <input class="form-control" type="date" name="sale_date" value="{{ $comicbook->sale_date }}">
            
            <label for="type">Tipo</label>
            <input class="form-control" type="text" name="type" value="{{ $comicbook->type }}">
            
            <label for="artists">Artists</label>
            <input class="form-control" type="text" name="artists" value="{{ $comicbook->artists }}">
            
            <label for="writers">Scritto da:</label>
            <input class="form-control" type="text" name="writers" value="{{ $comicbook->writers }}">

            <button class="btn btn-secondary my-3" type="submit">Aggiorna</button>
            
            </form>
            <a href="{{ route('comicbook.index') }}">Torna indietro</a>
    </div>

@endsection