@extends('layouts.app')

@section('content')

    <section>
    
        <a class="btn btn-danger" href="{{ route('comicbook.create') }}">+</a>
        
        <div class="d-flex flex-wrap justify-content-around">

            @foreach ($comicBooks as $comicBook)
                <a href="{{ route('comicbook.show', $comicBook->id) }}">
                    <div class="card m-2" style="width: 18rem;">
                        <img src="{{ $comicBook['thumb'] }}" class="card-img-top" alt="{{ $comicBook['title'] }}">
                        <div class="card-body">
                            <p class="card-text">{{ $comicBook['title'] }}</p>
                            
                            <a class="btn btn-primary my-3" href="{{ route('comicbook.edit', $comicBook->id) }}">Modifica</a>
                            <form action="{{ route('comicbook.destroy', $comicBook) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <input class="btn btn-danger" type="submit" value="Elimina">
                            </form>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </section>

@endsection