@extends('layouts.admin')

@section('title', 'Editar Usuario')

@section('content')

	{!! Form::model($user, ['route'=>['usuario.update', $user->id], 'method'=>'PUT']) !!}
		@include('usuario.forms.user')
		{!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}
	{!! Form::close() !!}

	{!! Form::open(['route'=>['usuario.destroy', $user->id], 'method'=>'DELETE']) !!}
		{!! Form::submit('Eliminar', ['class'=>'btn btn-danger float-right']) !!}
	{!! Form::close() !!}

@stop