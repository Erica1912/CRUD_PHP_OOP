<?php
	require_once("conexion.php");
	$obj = new conectar();
	$conexion = $obj->conexion();
	$id= $_GET['id'];
	$sql ="SELECT * FROM estudiante WHERE id = '$id'";
	$result = mysqli_query($conexion, $sql);
	$mostrar = mysqli_fetch_row($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
</head>
<body>
	<h1>Actualizar</h1>
	<form action="procesos/actualizar.php" method="post">
		<input type="text" hidden="" name="id" value="<?php echo $id; ?>" >
		<label>Nombre</label>
		<p></p>
		<input type="text" name="nombre" value="<?php echo $mostrar[1]; ?>">
		<p></p>
		<label>Apellido</label>
		<p></p>
		<input type="text" name="apellido" value="<?php echo $mostrar[2]; ?>">
		<p></p>
		<label>Teléfono</label>
		<p></p>
		<input type="text" name="telefono" value="<?php echo $mostrar[3]; ?>">
		<p></p>		
		<button>Agregar</button>
		<p></p>
	</form>
</body>
</html>