<?php

	$destino = "asalazarmarin@gmail.com";
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$email = $_POST["email"];
	$radio = $_POST["radio"];
	$descripcion = $_POST["descripcion"];
	$header = 'From: ' . $email; 

	$contenido = "Nombre: " . $nombre . "<br>Apellido: " . $apellido . "<br>Email: " . $email . "<br>Cotizar: " . $radio . 
	"<br>Descripcion: " . $descripcion;
	if(mail($destino, "Cita con el Artista", $contenido, $header))
	{
		echo "ok <br>";
	}
	else
	{
		echo "mal";
	}
	echo $contenido;
	echo $destino;

?>