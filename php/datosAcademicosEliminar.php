<?php
include("../bd/conexion.php");
$conexion=conectarse();

  $id = $_POST["codigoAlumno"];
  $opcion = $_POST["opcion"];
  $informacion = [];

  eliminar($id,$conexion);

  function eliminar($id,$conexion){
    $query = "DELETE FROM datosacadem WHERE idda = '$id'";
    $resultado = mysqli_query($conexion,$query);
    verificar_resultado($resultado);
    cerrar($conexion);
  }

  function verificar_resultado($resultado){
    if (!$resultado) $informacion["respuesta"] = "ERROR";
    else $informacion["respuesta"]= "BIEN";
    echo json_encode($informacion);
  }

  function cerrar($conexion){
    mysqli_close($conexion);
  }
?>
