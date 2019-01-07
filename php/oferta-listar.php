<?php
include("../bd/conexion.php");
$con=conectarse();

$query = "SELECT * FROM `bolsat` INNER JOIN `empresa` ON bolsat.id_empresa = empresa.id_empresa";
$resultado = mysqli_query($con, $query);
//	$resultado = $conexion->query("SELECT * FROM usuario WHERE estado = 1 ORDER BY idusuario desc;");

if(!$resultado){
	die("Error");
}else {
	while ($data = mysqli_fetch_assoc($resultado)) {
		$arreglo["data"][]= array_map("utf8_encode",$data);
	}
	echo (json_encode($arreglo));
}
mysqli_free_result($resultado);
mysqli_close($con);
 ?>
