<?php
include 'conexion.php';


$conexion=mysqli_connect('localhost', 'root', '', 'hotel');

$nombre = $_POST["name"];
$apellido = $_POST["apellidos"];
$iden = $_POST["id"];
$email = $_POST["correo"];
$date = $_POST["fechall"];
$plan = $_POST["plan"];
  
$insertar = " INSERT INTO ph (nombre, apellido, iden, email, date, plan) VALUES ('$nombre','$apellido', '$iden', '$email', '$date','$plan')";
$resultado = mysqli_query($conexion, $insertar);
if ($resultado) {
  echo '<script>
  alert("RESERVA COMPLETA, MUCHAS GRACIAS POR PREFERIRNOS");
  window.history.go(-1);
  </script>';
} else {
  echo "error";
}




mysqli_close($conexion);



?>