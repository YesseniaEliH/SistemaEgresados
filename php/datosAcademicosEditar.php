<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Editar Datos Académicos Posgrado</title>

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
          <h1 class="page-header letraYess">Editar Datos Académicos Posgrado</h1>
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
    $result=$con->query("SELECT * FROM datosacadem WHERE idda=$id");
    $row = $result->fetch_array();
  }
  ?>
  <form role="form" method="POST" action="datosAcademicosSubir.php">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default" style="background-color:#d1c4e9">
                <div class="panel-heading" style="background-color:#1b5e20; color:#fff">
                    <strong>Datos Académicos Posgrado</strong>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                          <div class="col-sm-4">
                            <div class="form-group">
                                <input name="idda" type="hidden" class="form-control" value="<?php echo $id ?>">
                                <label>Formación</label>
                                <select name="tipoform" class="selectpicker form-control">
                                  <option value="" selected disabled hidden>Seleccione la Formación</option>
                                  <option value="MAESTRIA" <?php if($row['tipoform']=="MAESTRIA"){?> selected <?php } ?> >MAESTRIA</option>
			                            <option value="DOCTORADO" <?php if($row['tipoform']=="DOCTORADO"){?> selected <?php } ?> >DOCTORADO</option>
                                  <option value="SEGUNDA ESPECIALIDAD PROFESIONAL" <?php if($row['tipoform']=="SEGUNDA ESPECIALIDAD PROFESIONAL"){?> selected <?php } ?> >SEGUNDA ESPECIALIDAD PROFESIONAL</option>
                                  <option value="OTRO" <?php if($row['tipoform']=="OTRO"){?> selected <?php } ?> >OTRO</option>
                                </select>
                            </div>
                          </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Institucion</label>
                                    <input name="institucion" value="<?php echo $row['institucion'] ?>"  type="text" class="form-control" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Fecha Inicio</label>
                                    <input name="fechainicio" value="<?php echo $row['fechainicio']; ?>" type="date" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Fecha Fin</label>
                                    <input name="fechafin" value="<?php echo $row['fechafin']; ?>" type="date" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Mención</label>
                                    <input name="mencion" value="<?php echo $row['mencion']; ?>" type="text" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>País</label>
                                    <input name="pais" value="<?php echo $row['pais']; ?>" type="text" class="form-control">
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
