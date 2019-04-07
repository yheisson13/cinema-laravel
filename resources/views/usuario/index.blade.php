@extends('layouts.admin')

@section('title', 'Usuarios')

<?php $message=Session::get('message') ?>

@section('content')

	@if(Session::has('message'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		  {{Session::get('message')}}
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
	@endif
	
	<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Operación</th>
            </tr>
          </thead>
          <tbody>
          	@foreach($users as $user)
	            <tr>
	              <td>{{$user->name}}</td>
	              <td>{{$user->email}}</td>
	              <td>
	              	{!! link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']) !!}
	              </td>
	            </tr>
	        @endforeach
          </tbody>
        </table>
    </div>

	<div class="float-right">
		{!! $users->render() !!}
	</div>
    	

@stop