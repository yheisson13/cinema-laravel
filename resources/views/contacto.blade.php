@extends('layouts.principal')

@section('content')

<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <h1>Contact</h1>
        <h4>We're always here to help you</h4>
        <br>
      </div>
    </div>

    {!! Form::open(['route' => 'mail.store', 'method' => 'POST']) !!}

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
          </div>
          <div class="form-group mt-4">
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            {!! Form::textarea('mensaje', null, ['class' => 'form-control', 'placeholder' => 'Mensaje', 'rows' => '3']) !!}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          {!! Form::submit('Enviar', ['class' => 'btn btn-dark']) !!}
        </div>
      </div>

    {!! Form::close() !!}

  </div>
</div>

@stop