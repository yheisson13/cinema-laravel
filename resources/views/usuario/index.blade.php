@extends('layouts.admin')

@section('title', 'Usuarios')

<?php $message=Session::get('message') ?>

@section('content')

	@if($message == 'store')
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		  <strong>Bien!</strong> Usuario creado exitosamente.
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
	              <td>ipsum</td>
	            </tr>
	        @endforeach
          </tbody>
        </table>
    </div>

@stop