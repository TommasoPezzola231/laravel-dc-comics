@extends('layouts.app')

@section('content')

    <section>
    
        <a class="btn btn-danger" href="{{ route('comicbook.create') }}">+</a>
        
        <div class="d-flex flex-wrap justify-content-around">

            @foreach ($comicBooks as $comicbook)
                <a href="{{ route('comicbook.show', $comicbook->id) }}">
                    <div class="card m-2" style="width: 18rem;">
                        <img src="{{ $comicbook['thumb'] }}" class="card-img-top" alt="{{ $comicbook['title'] }}">
                        <div class="card-body">
                            <p class="card-text">{{ $comicbook['title'] }}</p>
                            
                            <a class="btn btn-primary my-3" href="{{ route('comicbook.edit', $comicbook->id) }}">Modifica</a>
                            <form action="{{ route('comicbook.destroy', $comicbook) }}" method="POST">
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