@extends('layouts.app')

@section('content')

    <main class="bg-dark">

        <div class="jumbotron"></div>

        <section id="cards" class="customBox d-flex flex-wrap text-white pt-5 position-relative">
            <h4 class="py-1 px-3 text-white bg-primary position-absolute top-0 start-0 translate-middle ms-5">CURRENT SERIES</h4>

            @foreach ($movies as $movie)
                
                <div class="col-2 p-2">
                    <img src="{{ $movie['thumb'] }}">
                    <h6>{{ $movie['series'] }}</h6>
                </div>

            @endforeach

            <button class="align-self-center py-1 px-5 text-white bg-primary mx-auto mb-4"> Load More </button>
        </section>

        <section id="info" class="bg-primary text-white">
            <div class="customBox d-flex justify-content-around align-items-center">
    
                @foreach ($infoList as $info)
                    
                    <div class="d-flex align-items-center p-3 m-2">
                        <div>
                            <img src="{{ Vite::asset($info['img']) }}">
                        </div>
                        <div class="align-self-center ms-3">
                            <p>{{ $info['text'] }}</p>
                        </div>
                    </div>

                @endforeach
    
            </div>
        </section>
    </main>

@endsection