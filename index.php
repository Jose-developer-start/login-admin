<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Iniciar session</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

	<div class="fondo mt-5">
		<h1 class="text-center">Iniciar session</h1>
		<div class="col-md-4 offset-md-4">
			<?php
				session_start();
				if(isset($_SESSION['error'])) :?>
					<div class="alert alert-primary" role="alert">
					  Usuario o contraseña incorrecto!
					</div>
		
			<?php unset($_SESSION['error']); endif	?>
			<form action="comprobacion.php" method="POST">
				<div class="form-group">
					<input name="usuario" type="text" class="form-control">
				</div>
				<div class="form-group">
					<input name="clave" type="password" class="form-control">
				</div>
				<input type="submit" class="btn btn-primary btn-block">
			</form>
		</div>
	</div>
	
</body>
</html>