@extends('layouts.admin')

@section('title', 'Peliculas')

@section('content')

	@include('alerts.success')

	<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Genero</th>
              <th>Dirección</th>
              <th>Caratula</th>
              <th>Operaciones</th>
            </tr>
          </thead>
          <tbody>
          	@foreach($movies as $movie)
	          	<tr>
	          		<td>{{ $movie->name }}</td>
		          	<td>{{ $movie->genre }}</td>
		          	<td>{{ $movie->direction }}</td>
		          	<td class="text-center">
						<img src="movies/{{ $movie->path }}" alt="" width="100">
		          	</td>
		          	<td>Editar</td>
	          	</tr>
	        @endforeach
          </tbody>
        </table>
    </div>

@endsection

@section('scripts')
	
@endsection