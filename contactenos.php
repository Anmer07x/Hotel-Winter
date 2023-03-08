<?php

include 'conexion.php';
$nombre = $_POST["name"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

$insertar = " INSERT INTO pf (nombre, email,  mensaje) VALUES ('$nombre', '$email', '$mensaje')";

$resultado = mysqli_query($conexion, $insertar);
if ($resultado) {
  echo '<script>
  alert("Muchas gracias por visitarnos su mensaje y credenciales han sido enviados");
  window.history.go(-1);
  </script>';
} else {
  echo "error";
}

mysqli_close($conexion);
?>

