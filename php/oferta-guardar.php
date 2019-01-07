<?php
  include("../bd/conexion.php");
  $conexion=conectarse();
  $id = $_POST["id"];
  $cargo = $_POST["cargo"];
  $empresa = $_POST["empresa"];
  $vacantes = $_POST["vacantes"];
  $salario = $_POST["salario"];
  $fecha = $_POST["fecha_registro"];
  $opcion = $_POST["opcion"];
  $informacion = [];

  modificar($cargo,$empresa,$vacantes,$id,$salario,$fecha,$conexion);

  function modificar($cargo,$empresa,$vacantes,$id,$salario,$fecha,$conexion){
    $query= "UPDATE bolsat SET id_empresa='$empresa', cargo='$cargo', vacantes='$vacantes', salario='$salario', fecha_modificacion='$fecha' WHERE id_bolsa='$id'";
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
