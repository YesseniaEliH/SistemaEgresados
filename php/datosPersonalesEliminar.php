<?php
include("../bd/conexion.php");
$conexion=conectarse();

  $id = $_GET["codigoAlumno"];
  $informacion = [];

  eliminar($id,$conexion);

  function eliminar($id,$conexion){
    $query1 = "DELETE FROM trabajoeg WHERE id_egresado = '$id'";
    $query2 = "DELETE FROM datosacadem WHERE id_egresado = '$id'";
    $query3 = "DELETE FROM datosacadem_univ WHERE id_egresado = '$id'";
    $query4 = "DELETE FROM datoslaborales WHERE id_egresado = '$id'";
    $query = "DELETE FROM egresado WHERE id = '$id'";
    mysqli_query($conexion,$query1);
    mysqli_query($conexion,$query2);
    mysqli_query($conexion,$query3);
    mysqli_query($conexion,$query4);
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
