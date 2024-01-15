@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">Movies</h1>

    <div class="container my-3">
        <div class="row">
            <div class="col d-flex flex-wrap gap-4 justify-content-around">
                @foreach ($movies as $movie)
                    <div class="movie-card">
                        <div>
                            <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
                        </div>
                        <h2 class="text-center px-3">{{ $movie->title }}</h2>
                        <hr>
                        <div class="px-2">
                            <h6>Titolo Originale: {{ $movie->original_title }}</h6>
                            <h6>Nazione: {{ $movie->nationality }}</h6>
                            <h6>Data di uscita: {{ $movie->date }}</h6>
                            <h6>Voto: {{ $movie->vote }}</h6>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
