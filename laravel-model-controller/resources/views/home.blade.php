@extends('layouts.app')

@section('home')
    <div class="contaner-fluid px-5 p-5">
        <div class="row flex-wrap">
            <h1 class="text-center">Best Movies</h1>
            @foreach ($movies as $movie)
                <div class="col-2 m-3 pt-4 text-center dg-card">
                    <h2 class="title">{{ $movie['title'] }}</h2>
                    <img src="{{ $movie['poster'] }}" alt="{{ $movie['title'] }}">
                    <div class="mt-3">
                        <h5>Original Title: </h5>
                        <h3>{{ $movie['original_title'] }}</h3>
                    </div>
                    <h5>Nationality: {{ $movie['nationality'] }}</h5>
                    <h5>Release Date: {{ $movie['date'] }}</h5>
                    <h5>Vote: {{ $movie['vote'] }}/10</h5>
                </div>
            @endforeach
        </div>
    </div>
@endsection
