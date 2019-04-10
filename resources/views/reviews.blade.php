@extends('layouts.principal')

@section('content')

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">

            @foreach($movies as $movie)

              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <div class="card-img-top">
                    <img src="movies/{{ $movie->path }}" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="{{ $movie->name }}">
                  </div>
                  <div class="card-body">
                    <p class="card-text"><strong>{{ $movie->name }}</strong></p>
                    <p class="card-text"><strong>CAST:</strong> {{ str_limit($movie->cast, 50) }}</p>
                    <p class="card-text"><strong>DIRECTION:</strong> {{ $movie->direction }}</p>
                    <p class="card-text"><strong>GENRE:</strong> {{ $movie->genre }}</p>
                    <p class="card-text"><strong>DURATION:</strong> {{ $movie->duration }}</p>
                  </div>
                </div>
              </div>

            @endforeach

          </div>
        </div>
      </div>

@stop