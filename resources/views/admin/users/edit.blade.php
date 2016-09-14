@extends('admin.template')

@section('title', 'Editar Usuario')

@section('content')
	{!! Form::open(['route'=>['admin.users.update', $user], 'method' => 'PUT', 'files' => true]) !!}
	
		<div class="form-group col-md-8 col-md-offset-2">
			<div>
				{!! Form::label('first_name', 'Nombre') !!}
				{!! Form::text('first_name', $user->first_name, ['class' => 'form-control', 'placeholder' => 'Nombre del Usuario', 'required']) !!}
			</div>
			<div>
				{!! Form::label('last_name', 'Apellido') !!}
				{!! Form::text('last_name', $user->last_name, ['class' => 'form-control', 'placeholder' => 'Apellido del Usuario', 'required']) !!}
			</div>
			<div>
				{!! Form::label('email', 'Email') !!}
				{!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Email del Usuario', 'required']) !!}
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
				{!! Form::submit('Actualizar Usuario', ['class' => 'btn btn-primary']) !!}
				<a href="{{ route('admin.users.index') }}" class="text-rigth">Volver</a>
			</div>
			
		</div>

	{!! Form::close() !!}

@stop