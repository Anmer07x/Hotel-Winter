<?php
$server = "localhost";
$user = "root";
$pass = "";
$dab = "hotel"; 
$conexion = mysqli_connect($server,$user,$pass,$dab);
	
	if (mysqli_connect_errno()) {
		echo "la conecta fallo mi socio";
		exit();
	}
//	elseif (mysqli_connect()) {
//		echo "Offi plis";
//	}

	mysqli_select_db($conexion,$dab) or die ("no se encuentra la base de datos");

	mysqli_set_charset($conexion, "utf8");

	
?>