@extends('layouts.app')

@section('content')

    <div class="container-fluid p-5">

        <form action="{{ route('comicbook.store') }}" method="POST">
            @csrf
            
            <label for="title">Titolo</label>
            <input class="form-control" type="text" name="title">
            
            <label for="description">Descrizione</label>
            <input class="form-control" type="text" name="description">
            
            <label for="thumb">Link immagine</label>
            <input class="form-control" type="text" name="thumb">
            
            <label for="price">Prezzo</label>
            <input class="form-control" type="text" name="price">
            
            <label for="series">Serie</label>
            <input class="form-control" type="text" name="series">

            <label for="sale_date">Data pubblicazione</label>
            <input class="form-control" type="text" name="sale_date">
            
            <label for="type">Tipo</label>
            <input class="form-control" type="text" name="type">
            
            <label for="artists">Artists</label>
            <input class="form-control" type="text" name="artists">
            
            <label for="writers">Scritto da:</label>
            <input class="form-control" type="text" name="writers">
            <button class="btn btn-secondary my-3" type="submit">Crea</button>
            
            </form>
            <a href="{{ route('comicbook.index') }}">Torna indietro</a>
    </div>

@endsection