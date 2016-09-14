@extends('admin.template')

@section('title', 'Crear Usuario')

@section('content')

	@if (count($errors) > 1)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif


	{!! Form::open(['route'=>'admin.users.store', 'method' => 'POST', 'files' => true]) !!}
	
		<div class="form-group col-md-8 col-md-offset-2">
			<div>
				{!! Form::label('first_name', 'Nombre') !!}
				{!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Usuario', 'required']) !!}
			</div>
			<div>
				{!! Form::label('last_name', 'Apellido') !!}
				{!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Apellido del Usuario', 'required']) !!}
			</div>
			<div>
				{!! Form::label('email', 'Email') !!}
				{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email del Usuario', 'required']) !!}
			</div>
			<div>
				{!! Form::label('password', 'Contrasena') !!}
				{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contrasena del Usuario', 'required']) !!}
			</div>
			<div>
				{!! Form::label('password_confirmation', 'Repetir Contrasena') !!}
				{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Contrasena del Usuario', 'required']) !!}
			</div>
			<div>
				{!! Form::label('type', 'Tipo de Usuario') !!}
				{!! Form::select('type', ['admin' => 'Administrador', 'member' => 'Miembro'], null, ['class' => 'form-control', 'required']) !!}
			</div>
			<div>
				{!! Form::label('avatar', 'Avatar') !!}
				{!! Form::file('avatar') !!}
			</div>

			<div class="text-right">
				{!! Form::submit('Crear Usuario', ['class' => 'btn btn-primary']) !!}
				<a href="{{ route('admin.users.index') }}" class="text-rigth">Volver</a>
			</div>
			
		</div>

	{!! Form::close() !!}

@stop