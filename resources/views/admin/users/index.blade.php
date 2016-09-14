@extends('admin.template')

@section('title', 'Usuarios')

@section('content')
	<a href="{{ route('admin.users.create') }}" class="btn btn-primary">Crear Usuario</a><br><br>
	<table class="table table-bordered">
		<thead>
			<th>ID</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Correo</th>
			<th>Accion</th>
		</thead>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->first_name }}</td>
					<td>{{ $user->last_name }}</td>
					<td>{{ $user->email }}</td>

					<td>
						<a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-primary">Ver</a>
						<a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
						{!! Form::open(['route' => ['admin.users.destroy', $user], 'method' => 'delete', 'class' => 'form-delete']) !!}
							{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
						
						{!! Form::close() !!}
					</td>
					
				</tr>
				
			@endforeach
		<tbody>
			
		</tbody>
	</table>
	<div class="text-center">
		{!! $users->render() !!}
	</div>	

@stop