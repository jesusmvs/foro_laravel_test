<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title') | Administracion</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
	<style type="text/css">
		.container {
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
						@yield('title')
					</div>
					<div class="panel-body">
						@yield('content')
					</div>
				</div>
				<footer>
					<p>Foro de Prueba Laravel | 2016 &copy Ing.Jesus Velasquez</p>
				</footer>
			</div>
		</div>
	</div>
</body>
</html>