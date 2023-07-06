@extends('layouts.app')

@section('content')

    <div class="container-fluid p-5">

        <form action="{{ route('comicbook.store') }}" method="POST">
            @csrf
            
            <label for="title">Titolo</label>
            @error('title')
                <div class="bg-danger-subtle rounded">{{$message}}</div>  
            @enderror
            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{ old('title') }}">
            
            <label for="description">Descrizione</label>
            @error('description')
                <div class="bg-danger-subtle rounded">{{$message}}</div>  
            @enderror
            <input class="form-control @error('description') is-invalid @enderror" type="text" name="description" value="{{ old('description') }}">
            
            <label for="thumb">Link immagine</label>
            @error('thumb')
                <div class="bg-danger-subtle rounded">{{$message}}</div>  
            @enderror
            <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" value="{{ old('thumb') }}">
            
            <label for="price">Prezzo</label>
            @error('price')
                <div class="bg-danger-subtle rounded">{{$message}}</div>  
            @enderror
            <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" value="{{ old('price') }}">
            
            <label for="series">Serie</label>
            @error('series')
                <div class="bg-danger-subtle rounded">{{$message}}</div>  
            @enderror
            <input class="form-control @error('series') is-invalid @enderror" type="text" name="series" value="{{ old('series') }}">

            <label for="sale_date">Data pubblicazione</label>
            @error('sale_date')
                <div class="bg-danger-subtle rounded">{{$message}}</div>  
            @enderror
            <input class="form-control @error('sale_date') is-invalid @enderror" type="date" name="sale_date" value="{{ old('sale_date') }}">
            
            <label for="type">Tipo</label>
            @error('type')
                <div class="bg-danger-subtle rounded">{{$message}}</div>  
            @enderror
            <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" value="{{ old('type') }}">
            
            <label for="artists">Artists</label>
            @error('artists')
                <div class="bg-danger-subtle rounded">{{$message}}</div>  
            @enderror
            <input class="form-control @error('artists') is-invalid @enderror" type="text" name="artists" value="{{ old('artists') }}">
            
            <label for="writers">Scritto da:</label>
            @error('writers')
                <div class="bg-danger-subtle rounded">{{$message}}</div>  
            @enderror
            <input class="form-control @error('writers') is-invalid @enderror" type="text" name="writers" value="{{ old('writers') }}">
            <button class="btn btn-secondary my-3" type="submit">Crea</button>
            
            </form>
            <a href="{{ route('comicbook.index') }}">Torna indietro</a>
    </div>

@endsection