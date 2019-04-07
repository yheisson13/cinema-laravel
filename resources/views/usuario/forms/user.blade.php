<div class="form-group">
	{!! Form::label('Nombre:') !!}
	{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el Nombre del usuario']) !!}
</div>
<div class="form-group">
	{!! Form::label('Correo:') !!}
	{!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el Correo del usuario']) !!}
</div>
<div class="form-group">
	{!! Form::label('Contraseña:') !!}
	{!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Ingrese la Contraseña del usuario']) !!}
</div>