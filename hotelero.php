<?php
include 'conexion.php';
$sql = "SELECT * FROM ph";
?>


<!DOCTYPE html>
<html lang=”en”>
<head>
    <meta charset=”UTF-8″ />
    <title>ADMIN HW</title>
    <link rel="shortcut icon" href="../Hotel Winter/images/icon.png">
    <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../Hotel Winter/css/style.css">
</head>
<body>
   <center><strong><h1>DATOS HOTEL WINTER</h1></strong></center>
   <br>
   <br>
<div class="col-md-12">
<table border="7" class="table" >
<thead class="table-success table-striped" >
    <tr>
        <th>Id</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>identificacion</th>
        <th>Correo</th>
        <th>Llegada</th>
        <th>Plan HS</th>
    </tr>

</thead>

<tbody>
<?php $resultado = mysqli_query($conexion, $sql);
while($mostrar = mysqli_fetch_array($resultado)) { ?>


<tr>
   <th><?php  echo $mostrar['id']?></th>
    <th><?php  echo $mostrar['nombre']?></th>
    <th><?php  echo $mostrar['apellido']?></th>
    <th><?php  echo $mostrar['iden']?></th>   
    <th><?php  echo $mostrar['email']?></th>    
    <th><?php  echo $mostrar['date']?></th>    
    <th><?php echo $mostrar['plan']?></th>
     

 </tr>
<?php } ?>
<th><a href="../Hotel Winter/admin.php" class="btn btn-info">Volver</a></th>
<th><a href="../Hotel Winter/mensaje.php" class="btn btn-info">Mensajes</a></th>
<th><a href="../Hotel Winter/mensaje.php" class="btn btn-danger">Plan Hotelero</a></th>

</div>
<center>
<form action="Eliminar.php" class="table" method="POST">
    Id: <input type="text" name="txtID"> <br>
   
<input type="submit" value="Eliminar" name="btnEliminar">
</center>

<br>
</form>
<br>
<style>
    form{
        background:orange;
    }
    
</style>
      
</body>
</html>
