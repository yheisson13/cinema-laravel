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

    {!! Form::open(['url' => '/password/email', 'method' => 'POST']) !!}

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
          </div>
          {!! Form::submit('Enviar link', ['class' => 'btn btn-dark']) !!}
        </div>
      </div>

    {!! Form::close() !!}

  </div>
</div>

@stop