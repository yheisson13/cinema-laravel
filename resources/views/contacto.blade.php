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

    <form action="">

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Phone">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="" value="Enviar" class="btn btn-dark">
          </div>
        </div>
      </div>

    </form>

  </div>
</div>

@stop