<?php 
	require_once("conexion.php");
	require_once("metodosCrud.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title> PHP - CRUD - OOP</title>
</head>
<body>
	<br>
	<br>
	<form action="procesos/insertar.php" method="post">
		<label>Nombre</label>
		<p></p>
		<input type="text" name="nombre">
		<p></p>
		<label>Apellido</label>
		<p></p>
		<input type="text" name="apellido">
		<p></p>
		<label>Teléfono</label>
		<p></p>
		<input type="text" name="telefono">
		<p></p>		
		<button>Agregar</button>
		<p></p>
	</form>
	<table border="1px">
		<tr>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Teléfono</td>
			<td>Actualizar</td>
			<td>Eliminar</td>					
		</tr>
		<?php 
		$obj = new metodos();
		$sql = "SELECT * FROM estudiante";
		$datos= $obj->mostrarDatos($sql);
		foreach ($datos as $key) {	
		
		?>
		<tr>
			<td><?php echo $key['nombre']; ?></td>
			<td><?php echo $key['apellido']; ?></td>
			<td><?php echo $key['telefono']; ?></td>
			<td>
				<a href="editar.php?id=<?php echo $key['id'];?>">Editar</a>
			</td>
			<td>
				<a href="procesos/eliminar.php?id=<?php echo $key['id'];?>">Eliminar</a>
			</td>
		</tr>
		<?php 
		}
		?>
	</table>

</body>
</html>