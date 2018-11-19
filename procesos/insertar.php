<?php 
	require_once("../conexion.php");
	require_once("../metodosCrud.php");
 	$nombre = $_POST['nombre'];
 	$apellido = $_POST['apellido'];
 	$telefono = $_POST['apellido'];


 	$datos = array($nombre, $apellido, $telefono);
 	$obj = new metodos();
 	if ($obj->insertarDatosNombre($datos)==1) {
 		header("location:../index.php");
 	}else{
 		echo "falla agregar";
 	}
 	
?>