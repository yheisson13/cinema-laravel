@extends('layouts.principal')

@section('content')

<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <h1>Recuperar Contraseña</h1>
        <h4>We're always here to help you</h4>
        <br>
      </div>
    </div>

    {!! Form::open(['url' => '/password/reset']) !!}

      <div class="row">
        <div class="col-md-12">
          {!! Form::hidden('token', $token, null) !!}
          <div class="form-group">
            {!! Form::email('email', null, ['value' => "{{ old('email') }}", 'class' => 'form-control', 'placeholder' => 'Ingresa Email']) !!}
          </div>
          <div class="form-group">
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingresa Contraseña']) !!}
          </div>
          <div class="form-group">
            {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Ingresa de nuevo la Contraseña']) !!}
          </div>
          {!! Form::submit('Restablecer Contraseña', ['class' => 'btn btn-dark']) !!}
        </div>
      </div>

    {!! Form::close() !!}

  </div>
</div>

@stop