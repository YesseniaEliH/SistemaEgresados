<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Editar Datos Académicos Universitarios</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
	body{
		line-height: 1.20;
	}

</style>
<body class="">
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header letraYess">Editar Datos Académicos Universitarios</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <?php
  session_start();
  if(isset($_GET['codigoAlumno'])){
    include("../bd/conexion.php");
    $con=conectarse();
    $id=$_GET['codigoAlumno'];
    $result=$con->query("SELECT * FROM datosacadem_univ WHERE iddau=$id");
    $row = $result->fetch_array();
  }
  ?>
  <form role="form" method="POST" action="datosAcademicosUnivSubir.php">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default" style="background-color:#d1c4e9">
              <div class="panel-heading" style="background-color:#1b5e20; color:#fff">
                  <strong>Datos Académicos Universitarios</strong>
              </div>
              <div class="panel-body">
                  <div class="row">
                      <div class="col-lg-12">
                            <div class="col-sm-4">
                              <div class="form-group">
                                  <input name="iddau" type="hidden" class="form-control" value="<?php echo $id ?>">
                                  <label>Año de Ingreso</label>
                                  <input name="anio_ingreso" value="<?php echo $row['anio_ingreso'] ?>" placeholder="Año de Ingreso" type="year" class="form-control" placeholder="Año de ingreso" required>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-group">
                                  <label>Año de Egreso</label>
                                  <input name="anio_egreso" value="<?php echo $row['anio_egreso'] ?>" placeholder="Año de egreso" type="year" class="form-control" required>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-group form-group-sm">
                                  <label>¿Ha estudiado una segunda carrera?</label>
                                  <div class="radio">
                                      <label>
                                          <input name="segunda_carrera" type="radio" id="optionSi" value="SI" <?php if($row['segunda_carrera']=="SI"){?>checked <?php } ?>>SI
                                      </label>
                                      <label>
                                          <input name="segunda_carrera" type="radio" id="optionNo" value="NO" <?php if($row['segunda_carrera']=="NO"){?>checked <?php } ?>>NO
                                      </label>
                                  </div>
                                </div><br>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-group">
                                  <label>Nombre Segunda Carrera</label>
                                  <input name="nombre_segunda_carrera" placeholder="Si contestó SI. ¿Cuál es su segunda carrera?" type="text" class="form-control" value="<?php echo $row['nombre_segunda_carrera']; ?>">
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-group">
                                  <label>Universidad</label>
                                  <input name="univ_segunda_carrera" placeholder="Universidad Segunda Carrera" type="text" class="form-control" value="<?php echo $row['univ_segunda_carrera']; ?>">
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-group">
                                  <label>Año de Ingreso</label>
                                  <input name="anio_ingreso_sc" placeholder="Año de Ingreso" type="year" class="form-control" placeholder="Año de ingreso" value="<?php echo $row['anio_ingreso_sc']; ?>">
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-group">
                                  <label>Año de Egreso</label>
                                  <input name="anio_egreso_sc" placeholder="Año de egreso" type="year" class="form-control" value="<?php echo $row['anio_egreso_sc']; ?>">
                              </div>
                            </div>
                      </div>
                      <!-- /.col-lg-6 (nested) -->
                  </div>
                  <!-- /.row (nested) -->
              </div>
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <center>
      <button type="submit" class="btn btn-success">Actualizar</button>
    </center>
</form>

  <!-- /.row -->
  <!-- JS Scripts-->
  <!-- jQuery Js -->
  <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- Metis Menu Js -->
  <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Custom Js -->
  <script src="assets/js/custom-scripts.js"></script>


</body>
</html>
