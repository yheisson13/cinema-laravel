@extends('layouts.admin')

@section('title', 'Generos')

@section('content')

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