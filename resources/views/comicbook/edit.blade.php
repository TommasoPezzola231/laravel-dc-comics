@extends('layouts.app')

@section('content')

    <div class="container-fluid p-5">

        <form action="{{ route('comicbook.update', $comicBook->id) }}" method="POST">
            @csrf

            @method('PUT')
            
            <label for="title">Titolo</label>
            <input class="form-control" type="text" name="title" value="{{ $comicBook->title }}">
            
            <label for="description">Descrizione</label>
            <input class="form-control" type="text" name="description" value="{{ $comicBook->description }}">
            
            <label for="thumb">Link immagine</label>
            <input class="form-control" type="text" name="thumb" value="{{ $comicBook->thumb }}">
            
            <label for="price">Prezzo</label>
            <input class="form-control" type="text" name="price" value="{{ $comicBook->price }}">
            
            <label for="series">Serie</label>
            <input class="form-control" type="text" name="series" value="{{ $comicBook->series }}">

            <label for="sale_date">Data pubblicazione</label>
            <input class="form-control" type="date" name="sale_date" value="{{ $comicBook->sale_date }}">
            
            <label for="type">Tipo</label>
            <input class="form-control" type="text" name="type" value="{{ $comicBook->type }}">
            
            <label for="artists">Artists</label>
            <input class="form-control" type="text" name="artists" value="{{ $comicBook->artists }}">
            
            <label for="writers">Scritto da:</label>
            <input class="form-control" type="text" name="writers" value="{{ $comicBook->writers }}">

            <button class="btn btn-secondary my-3" type="submit">Aggiorna</button>
            
            </form>
            <a href="{{ route('comicbook.index') }}">Torna indietro</a>
    </div>

@endsection