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

          $idda = $_POST['idda'];
          $tipoform=$_POST['tipoform'];
      		$institucion=$_POST['institucion'];
          $fechainicio=$_POST['fechainicio'];
      		$fechafin=$_POST['fechafin'];
          $mencion=$_POST['mencion'];
          $pais=$_POST['pais'];

          //MySqli Insert Query
          $sql = "UPDATE datosacadem SET `tipoform` = '$tipoform',
                                         `institucion` = '$institucion',
                                         `fechainicio` = '$fechainicio',
                                         `fechafin` = '$fechafin',
                                         `mencion` = '$mencion',
                                         `pais` = '$pais'
                  WHERE idda = $idda ";


      if ($con->query($sql) === TRUE) {
          echo "Record was updated";
          header("location: datosAcademicos.php");
      } else {
          echo "Error: " . $sql . "<br>" . $con->error;
      }

      $con->close();

                ?>
  </body>
</html>
