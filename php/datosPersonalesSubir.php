<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include("../bd/conexion.php");
      $con=conectarse();

          $id = $_POST['id'];
          $codigo_matricula=$_POST['codigo_matricula'];
      		$clave=$_POST['clave'];
      		$dni=$_POST['dni'];
          $fecha_nacimiento=$_POST['fecha_nacimiento'];
      		$apellido_paterno=$_POST['apellido_paterno'];
          $apellido_materno=$_POST['apellido_materno'];
          $nombres=$_POST['nombres'];
          $sexo=$_POST['sexo'];
          if ( empty ( $_POST['phone_fijo']) ) {
            $phone_fijo=NULL;}
          else {
          $phone_fijo=$_POST['phone_fijo']; }
          $phone_celular=$_POST['phone_celular'];
          if ( empty ( $_POST['email'] ) ) {
            $email=NULL;}
          else {
            $email=$_POST['email'];}
          if ( !empty ( $ciudad ) ) {
            $ciudad=NULL;}
          else {
            $ciudad=$_POST['ciudad'];}
          if ( !empty ( $region ) ) {
            $region=NULL;}
          else {
            $region=$_POST['region'];}
          if ( !empty ( $provincia ) ) {
            $provincia='NULL';}
          else {
            $provincia=$_POST['provincia'];}
          if ( !empty ( $distrito ) ) {
            $distrito='NULL';}
          else {
            $distrito=$_POST['distrito'];}
          if ( !empty ( $direccion ) ) {
            $direccion='NULL';}
          else {
            $direccion=$_POST['direccion'];}
          if ( !empty ( $facebook ) ) {
            $facebook='NULL';}
          else {
            $facebook=$_POST['facebook'];}
          if ( !empty ( $twiter ) ) {
            $twiter=NULL;}
          else {
            $twiter=$_POST['twiter'];}
          if ( !empty ( $linkedln ) ) {
            $linkedln=NULL;}
          else {
          $linkedln=$_POST['linkedln'];}

          //MySqli Insert Query
          $sql = "UPDATE egresado SET `codigo_matricula` = '$codigo_matricula',
                                                    `clave` = '$clave',
                                                    `dni` = $dni,
                                                    `fecha_nacimiento` = '$fecha_nacimiento',
                                                    `apellido_paterno` = '$apellido_paterno',
                                                    `apellido_materno` = '$apellido_materno',
                                                    `nombres` = '$nombres',
                                                    `sexo` = '$sexo',
                                                    `phone_fijo` = '$phone_fijo',
                                                    `phone_celular` = $phone_celular,
                                                    `email` = '$email',
                                                    `ciudad` = '$ciudad',
                                                    `region` = '$region',
                                                    `provincia` = '$provincia',
                                                    `distrito` = '$distrito',
                                                    `direccion` = '$direccion',
                                                    `facebook` = '$facebook',
                                                    `twiter` = '$twiter',
                                                    `linkedln` = '$linkedln' WHERE id = $id ";


      if ($con->query($sql) === TRUE) {
          echo "Record was updated";
          header("location: datosPersonales.php");
      } else {
          echo "Error: " . $sql . "<br>" . $con->error;
      }

      $con->close();

                ?>
  </body>
</html>
