<?php
  include("../bd/conexion.php");
  $conexion=conectarse();
  $id = $_POST["id"];
  $nro_ruc = $_POST["nro_ruc"];
  $razon_social = $_POST["razon_social"];
  $sector = $_POST["sector"];
  $telefono_fijo = $_POST["telefono_fijo"];
  $telefono_celular = $_POST["telefono_celular"];
  $opcion = $_POST["opcion"];
  $informacion = [];

  modificar($nro_ruc,$razon_social,$sector,$id,$telefono_fijo,$telefono_celular,$conexion);

  function modificar($nro_ruc,$razon_social,$sector,$id,$telefono_fijo,$telefono_celular,$conexion){
    $query= "UPDATE empresa SET nro_ruc='$nro_ruc', razon_social='$razon_social', sector='$sector', telefono_fijo='$telefono_fijo', telefono_celular='$telefono_celular' WHERE id='$id'";
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
