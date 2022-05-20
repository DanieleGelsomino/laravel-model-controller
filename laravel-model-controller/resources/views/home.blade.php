@extends('layouts.app')

@section('home')
    <div class="contaner-fluid px-5 bg-success p-5">
        <div class="row flex-wrap">
            @foreach ($movies as $movie)
                <div class="col-2 card m-3 pt-4 text-center">
                    <h2>{{ $movie['title'] }}</h2>
                    <div class="originalTitle">
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
