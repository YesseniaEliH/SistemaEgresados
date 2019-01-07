<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Editar Datos Laborales</title>

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
          <h1 class="page-header letraYess">Editar Datos Laborales</h1>
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
    $result=$con->query("SELECT * FROM datoslaborales WHERE iddl=$id");
    $row = $result->fetch_array();
  }
  ?>
  <form role="form" method="POST" action="datosLaboralesSubir.php">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default" style="background-color:#d1c4e9">
                <div class="panel-heading" style="background-color:#1a237e; color:#fff">
                    <strong>Datos Laborales</strong>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <input name="fecha_registro" type="hidden" class="form-control" value="<?php date_default_timezone_set('America/Lima');
                                echo "&nbsp;".date("d/m/Y"); ?>">
                                <label>¿Usted esta laborando actualmente?</label>
                                    <select name="estado_w" class="selectpicker form-control" required>
                                      <option value="SI">SI</option>
                                      <option value="NO">NO</option>
                                    </select>
                                    <br>
                                    <label><strong><h5>Datos de su última experiencia laboral:</h5></strong></label>
                              </div>
                          </div>
                            <div class="col-sm-4">
                              <div class="form-group">
                                  <input name="iddl" type="hidden" class="form-control" value="<?php echo $id ?>">
                                  <label>Condición</label>
                                  <select name="condicion_w" class="selectpicker form-control">
                                    <option value="" selected disabled hidden>Seleccione la Formación</option>
                                    <option value="NOMBRADO" <?php if($row['condicion_w']=="NOMBRADO"){?> selected <?php } ?> >NOMBRADO</option>
  			                            <option value="CONTRATADO" <?php if($row['condicion_w']=="CONTRATADO"){?> selected <?php } ?> >CONTRATADO</option>
                                    <option value="OTRO" <?php if($row['condicion_w']=="OTRO"){?> selected <?php } ?> >OTRO</option>
                                  </select>
                              </div>
                            </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Empresa</label>
                                    <input name="empresa_w" value="<?php echo $row['empresa_w'] ?>"  type="text" class="form-control" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Sector</label>
                                    <select name="sector_w" class="selectpicker form-control">
                                      <option value="" selected disabled hidden>Seleccione la Formación</option>
                                      <option value="PUBLICO" <?php if($row['sector_w']=="PUBLICO"){?> selected <?php } ?> >PÚBLICO</option>
                                      <option value="PRIVADO" <?php if($row['sector_w']=="PRIVADO"){?> selected <?php } ?> >PRIVADO</option>
                                      <option value="OTRO" <?php if($row['sector_w']=="OTRO"){?> selected <?php } ?> >OTRO</option>
                                    </select>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Área</label>
                                    <input name="area_w" value="<?php echo $row['area_w']; ?>" type="text" class="form-control" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Cargo</label>
                                    <input name="cargo_w" value="<?php echo $row['cargo_w']; ?>" type="text" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Sueldo</label>
                                    <input name="sueldo_w" value="<?php echo $row['sueldo_w']; ?>" type="text" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input name="direccion_w" value="<?php echo $row['direccion_w']; ?>" type="text" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Región</label>
                                    <input name="region_w" value="<?php echo $row['region_w']; ?>" type="text" class="form-control">
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Provincia</label>
                                    <input name="provincia_w" value="<?php echo $row['provincia_w']; ?>" type="text" class="form-control">
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Distrito</label>
                                    <input name="distrito_w" value="<?php echo $row['distrito_w']; ?>" type="text" class="form-control">
                                </div>
                              </div>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
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
