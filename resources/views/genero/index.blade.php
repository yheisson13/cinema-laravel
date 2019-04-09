@extends('layouts.admin')

@section('title', 'Generos')

@section('content')

	@include('genero.modal')

	<div id="msj-success" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
		<strong>Genero Actualizado Correctamente</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		</button>
	</div>

	<div id="msj-danger" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
		<strong>Genero Eliminado Correctamente</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		</button>
	</div>

	<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Operación</th>
            </tr>
          </thead>
          <tbody id="datos"></tbody>
        </table>
    </div>

@endsection

@section('scripts')
	{!! Html::script('js/script2.js') !!}
@endsection