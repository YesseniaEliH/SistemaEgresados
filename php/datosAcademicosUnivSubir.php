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

          $iddau = $_POST['iddau'];
          $anio_ingreso=$_POST['anio_ingreso'];
      		$anio_egreso=$_POST['anio_egreso'];
          $segunda_carrera=$_POST['segunda_carrera'];
          $nombre_segunda_carrera=$_POST['nombre_segunda_carrera'];
          $univ_segunda_carrera=$_POST['univ_segunda_carrera'];
          $anio_ingreso_sc=$_POST['anio_ingreso_sc'];
      		$anio_egreso_sc=$_POST['anio_egreso_sc'];

          //MySqli Insert Query
          $sql = "UPDATE datosacadem_univ SET `anio_ingreso` = '$anio_ingreso',
                                         `anio_egreso` = '$anio_egreso',
                                         `segunda_carrera` = '$segunda_carrera',
                                         `nombre_segunda_carrera` = '$nombre_segunda_carrera',
                                         `univ_segunda_carrera` = '$univ_segunda_carrera',
                                         `anio_ingreso_sc` = '$anio_ingreso_sc',
                                         `anio_egreso_sc` = '$anio_egreso_sc'
                  WHERE iddau = $iddau ";


      if ($con->query($sql) === TRUE) {
          echo "Record was updated";
          header("location: datosAcademicosUniv.php");
      } else {
          echo "Error: " . $sql . "<br>" . $con->error;
      }

      $con->close();

                ?>
  </body>
</html>
