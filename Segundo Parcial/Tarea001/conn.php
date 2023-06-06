<!-- Establecemos la conexion -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdd = "tarea001";

$conexion = mysqli_connect($servername,$username,$password,$bdd);
/*
if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
  }
  echo "Connected successfully";*/
?>