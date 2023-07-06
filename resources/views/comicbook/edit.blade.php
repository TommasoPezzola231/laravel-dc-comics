@extends('layouts.app')

@section('content')

    <div class="container-fluid p-5">

        <form action="{{ route('comicbook.update', $comicbook->id) }}" method="POST">
            @csrf

            @method('PUT')
            
            <label for="title">Titolo</label>
            @error('title')
                <div class="bg-danger-subtle rounded">{{$message}}</div>  
            @enderror
            <input class="form-control" type="text" name="title" value="{{ old("title") ?? $comicbook->title}}">
            
            <label for="description">Descrizione</label>
            @error('description')
                <div class="bg-danger-subtle rounded">{{$message}}</div>  
            @enderror
            <input class="form-control" type="text" name="description" value="{{ old("description") ?? $comicbook->description}}">
            
            <label for="thumb">Link immagine</label>
            @error('thumb')
                <div class="bg-danger-subtle rounded">{{$message}}</div>  
            @enderror
            <input class="form-control" type="text" name="thumb" value="{{ old("thumb") ?? $comicbook->thumb}}">
            
            <label for="price">Prezzo</label>
            @error('price')
                <div class="bg-danger-subtle rounded">{{$message}}</div>  
            @enderror
            <input class="form-control" type="text" name="price" value="{{ old("price") ?? $comicbook->price}}">
            
            <label for="series">Serie</label>
            @error('series')
                <div class="bg-danger-subtle rounded">{{$message}}</div>  
            @enderror
            <input class="form-control" type="text" name="series" value="{{ old("series") ?? $comicbook->series}}">

            <label for="sale_date">Data pubblicazione</label>
            @error('sale_date')
                <div class="bg-danger-subtle rounded">{{$message}}</div>  
            @enderror
            <input class="form-control" type="date" name="sale_date" value="{{ old("sale_date") ?? $comicbook->sale_date}}">
            
            <label for="type">Tipo</label>
            @error('type')
                <div class="bg-danger-subtle rounded">{{$message}}</div>  
            @enderror
            <input class="form-control" type="text" name="type" value="{{ old("type") ?? $comicbook->type}}">
            
            <label for="artists">Artists</label>
            @error('artists')
                <div class="bg-danger-subtle rounded">{{$message}}</div>  
            @enderror
            <input class="form-control" type="text" name="artists" value="{{ old("artists") ?? $comicbook->artists}}">
            
            <label for="writers">Scritto da:</label>
            @error('writers')
                <div class="bg-danger-subtle rounded">{{$message}}</div>  
            @enderror
            <input class="form-control" type="text" name="writers" value="{{ old("writers") ?? $comicbook->writers}}">

            <button class="btn btn-secondary my-3" type="submit">Aggiorna</button>
            
            </form>
            <a href="{{ route('comicbook.index') }}">Torna indietro</a>
    </div>

@endsection