<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      session_start();
      include("../bd/conexion.php");
      $con=conectarse();

      // $capture_field_vals ="";
      // if(isset($_POST["e"]) && is_array($_POST["e"])){
      //     $capture_field_vals = implode("','", $_POST["e"]);
      // }
      // date_default_timezone_set('America/Lima');
      // $today= date("d/m/Y");
      // $capture_field_vals ="'".$capture_field_vals."','NULL','"."$today"."'";
      //
      // function update($table, $rows){
      //   $set = [];
      //   foreach($rows as $k => $v) {
      //     $set[] = "$k='$v'";
      //   }
      //   $sql = "UPDATE $table SET ". implode(', ', $set);
      //   $this->query($sql);
      // }
      // //MySqli Update Query
      // $update_row = update('egresado',$capture_field_vals);

      if($update_row){
          echo 'Registro actualizado correctamente';
      }else {
         echo 'Algo va mal'.$update_row.$con->error;
      }

     ?>
     
<!--	id
		codigo_matricula
		clave
		nivel
		dni
		fecha_nacimiento
		apellido_paterno
		apellido_materno
		nombres
		sexo
		codigo_ciudad
		phone_fijo
		phone_celular
		email
		fecha_bach
		escuela
		facultad
		especialidad
		especialidad2
		anio_ingreso
		anio_egreso
		grado_bach
		anio_bach
		grado_titulo
		anio_titulo
		grado_maestro
		anio_maestro
		grado_doctor
		anio_doctor
		num_carrera_profesional
		region
		provincia
		distrito
		direccion
		estado_w
		condicion_w
		empres_w
		sector_w
		cargo_w
		sueldo_w
		direccion_w
		region_w
		provincia_w
		distrito_w
		fecha_registro
		fecha_modificacion
-->
     
     
  </body>
</html>
