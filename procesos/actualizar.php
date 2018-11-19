<?php 
	require_once("../conexion.php");
	require_once("../metodosCrud.php");
	$id = $_POST['id'];
 	$nombre = $_POST['nombre'];
 	$apellido = $_POST['apellido'];
 	$telefono = $_POST['telefono'];


 	$datos = array($nombre, $apellido, $telefono, $id);
 	$obj = new metodos();
 	if ($obj->actualizarDatosNombre($datos)==1) {
 		header("location:../index.php");
 	}else{
 		echo "falla actualizar";
 	}


?>