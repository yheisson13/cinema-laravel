@extends('layouts.admin')

@section('title', 'Usuarios')

@section('content')

	@include('alerts.success')

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