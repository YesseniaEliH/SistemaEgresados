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

          $iddl = $_POST['iddl'];
          $condicion_w=$_POST['condicion_w'];
      		$empresa_w=$_POST['empresa_w'];
          $sector_w=$_POST['sector_w'];
      		$area_w=$_POST['area_w'];
          $cargo_w=$_POST['cargo_w'];
          $sueldo_w=$_POST['sueldo_w'];
          $direccion_w=$_POST['direccion_w'];
          $region_w=$_POST['region_w'];
          $provincia_w=$_POST['provincia_w'];
          $distrito_w=$_POST['distrito_w'];
          //MySqli Insert Query
          $sql = "UPDATE datoslaborales SET `condicion_w` = '$condicion_w',
                                         `empresa_w` = '$empresa_w',
                                         `sector_w` = '$sector_w',
                                         `area_w` = '$area_w',
                                         `cargo_w` = '$cargo_w',
                                         `sueldo_w` = '$sueldo_w',
                                         `direccion_w` = '$direccion_w',
                                         `region_w` = '$region_w',
                                         `provincia_w` = '$provincia_w',
                                         `distrito_w` = '$distrito_w'
                  WHERE iddl = $iddl ";


      if ($con->query($sql) === TRUE) {
          echo "Record was updated";
          header("location: datosLaborales.php");
      } else {
          echo "Error: " . $sql . "<br>" . $con->error;
      }

      $con->close();

                ?>
  </body>
</html>
