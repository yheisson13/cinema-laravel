@extends('layouts.admin')

@section('title', 'Agregar Usuario')

@section('content')

	@include('alerts.request')

	{!! Form::open(['route'=>'usuario.store', 'method'=>'POST']) !!}
		@include('usuario.forms.user')
		{!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
	{!! Form::close() !!}

@stop