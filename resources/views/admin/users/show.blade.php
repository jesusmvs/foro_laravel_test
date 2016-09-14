@extends('admin.template')

@section('title', 'Ver Usuario')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<ul class="list-group">
			<li class="list-group-item"><b>Nombre: </b> {{ $user->first_name }} </li>
			<li class="list-group-item"><b>Apellido: </b>{{ $user->last_name }} </li>
			<li class="list-group-item"><b>Correo: </b>{{ $user->email }} </li>
			<li class="list-group-item">
				<b>Tipo: </b>
				@if($user->type == 'admin')
					Administrador
				@else
					Miembro
				@endif
			</li>
		</ul>
		<div class="text-right">
			<a href="{{ route('admin.users.index') }}">Volver</a>
		</div>
		
	</div>
	

@stop