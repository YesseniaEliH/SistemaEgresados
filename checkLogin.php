<?php
session_start();
$server = "localhost";
$user = "root";
$password = "";//poner tu propia contraseña, si tienes una.
$bd = "bd_seguimiento";

$conn = mysqli_connect($server, $user, $password, $bd);

$username = $_REQUEST['nomusu'];
$password  = $_REQUEST['passusu'];
$query = $conn->query("SELECT * from usuario where pass='$password' AND nombre_usuario='$username'");
$rows = $query->num_rows;
if ($rows == 1) {
  $r=$query->fetch_array();
  $nom = $r['nombre'];
  $ape = $r['apellidos'];
  $_SESSION['ok']="ok";
  $_SESSION['nombre']=$nom; // Initializing Session
  $_SESSION['apellidos']=$ape;

  $query->free();
  header("location: menuAdmin.php"); // Redirecting To Other Page
} else {
  $error = "Username or Password is invalid";
  header("location: index.html");
}

 ?>
