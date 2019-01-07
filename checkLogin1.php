<?php
session_start();
$server = "localhost";
$user = "root";
$password = "";//poner tu propia contraseña, si tienes una.
$bd = "bd_seguimiento";

$conn = mysqli_connect($server, $user, $password, $bd);

$username = $_REQUEST['codigo_matricula'];
$password  = $_REQUEST['clave'];
$query = $conn->query("SELECT * from egresado where clave='$password' AND codigo_matricula='$username'");
$rows = $query->num_rows;
if ($rows == 1) {
  $r=$query->fetch_array();
  $nom = $r['nombres'];
  $ape = $r['apellido_paterno'];
  $matricula = $r['codigo_matricula'];
  $id = $r['id'];
  $_SESSION['ok']="ok";
  $_SESSION['nombres']=$nom; // Initializing Session
  $_SESSION['apellido_paterno']=$ape;
  $_SESSION['id']=$id;
  // $_SESSION['codigo_matricula']=$matricula;

  $query->free();
  header("location: menuUsu.php?matricula=$matricula"); // Redirecting To Other Page
} else {
  $error = "Username or Password is invalid";
  header("location: index.html");
}

 ?>
