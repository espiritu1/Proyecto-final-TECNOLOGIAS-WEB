<?php
include("db.php");

if(isset($_POST['save'])){
  echo'guardando';
  $nombre = $_POST['nombre'];
  $matricula = $_POST['matricula'];
  $carrera = $_POST['carrera'];

  $id_rol = $_POST['id_rol'];
  $pass = $_POST['pass'];

  $sql = "INSERT INTO  usarios (nombre, matricula, carrera, id_rol, pass)  VALUES ('$nombre','$matricula','$carrera','$id_rol','$pass')";
  $consuta= mysqli_query( $conn, $sql );

  $_SESSION['message'] ='los datos se guardaron exitosamente';
  $_SESSION['message_type'] ='success';

  header("location: admin.php");
  

}

?>