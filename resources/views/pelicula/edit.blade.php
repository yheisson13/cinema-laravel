@extends('layouts.admin')

@section('title', 'Editar Peliculas')

@section('content')
	
	{!! Form::model($movie, ['route' => ['pelicula.update', $movie->id], 'method' => 'PUT', 'files' => true]) !!}
		@include('pelicula.forms.pelicula')
		{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}

	{!! Form::open(['route' => ['pelicula.update', $movie->id], 'method' => 'DELETE']) !!}
		{!! Form::submit('Eliminar', ['class' => 'btn btn-danger float-right mb-4']) !!}
	{!! Form::close() !!}

@endsection