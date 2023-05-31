<?php

include("conexion.php");

$nombre = $_POST["Nombre"];
$pass   = $_POST["Contraseña"];
$correo   = $_POST["Correo"];
$celular   = $_POST["Celular"];


//Registrar
if(isset($_POST["btnregistrar"]))
{
	$sqlgrabar = "INSERT INTO datos(NOMBRE,CORREO,CELULAR,CONTRASENA) values ('$nombre','$correo','$celular','$pass')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='index.html' </script>";
	}else 
	{
		echo "Error: ".$sqlgrabar."<br>".mysqli_error($conn);
	}
}


?>