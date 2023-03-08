<?php
$server = "localhost";
$user = "root";
$pass = "";
$dab = "hotel"; 
$conexion = mysqli_connect($server,$user,$pass,$dab)
or die ("Error en la conexion");


$id= $_POST['txtID'];
mysqli_query($conexion, "DELETE from reserva where reserva_id ='$id'")
or die("Error al eliminar los datos");



if($conexion){
    Header("Location: admin.php");
}
$id= $_POST['txtID'];
mysqli_query($conexion, "DELETE from ph where id ='$id'")
or die("Error al eliminar los datos");

if($conexion){
    Header("location:hotelero.php");
}


?>