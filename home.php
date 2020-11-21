<?php
	session_start();

	if (!isset($_SESSION['admin']) and !isset($_SESSION['adminMaster'])){
		header("Location:index.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<section class="container my-5">
		<h1 class="text-center">Bienviendo a panel del administrador
			<?php //echo $_SESSION['admin']['Nombre']; ?>
		</h1>
		<a href="cerrarSesion.php" class="btn btn-danger">Cerrar sesion</a>

		<?php if(isset($_SESSION['admin'])) :?>
		<button class="btn btn-secondary">Disponible solo para usuarios</button>
		<?php endif ?>

		<?php if(isset($_SESSION['adminMaster'])) :?>
			<button class="btn btn-secondary">Disponible solo para Administrador</button>
		<?php endif ?>
	</section>
	
</body>
</html>