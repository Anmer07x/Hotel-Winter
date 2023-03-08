<?php
if(!empty($_POST['nickname']) && !empty($_POST['password'])){
  $nickname = $_POST['nickname'];
  $password = $_POST['password'];
  if($nickname == "admin" && $password =="1234"){
    header("location:admin.php");
  }
}else {
  echo "Los datos estan vacios";
}
?>
