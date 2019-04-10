@extends('layouts.admin')

@section('title', 'Agregar Genero')

@section('content')

	{!! Form::open() !!}

		<div id="msj-success" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
			<strong>Genero Agregado Correctamente</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
		</div>

		<div id="msj-error" class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
			<strong id="msj"></strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
		</div>

		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

		@include('genero.form.genero')

		<div class="mt-4">
			{!! link_to('#', $title='Registrar', $attributes = ['id' => 'registro', 'class' => 'btn btn-primary'], $secure = null) !!}
		</div>

	{!! Form::close() !!}

@endsection

@section('scripts')
	{!! Html::script('js/script.js') !!}
@endsection