<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Editar Datos Personales</title>

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
          <h1 class="page-header letraYess">Editar Datos Personales</h1>
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
    $result=$con->query("SELECT * FROM egresado WHERE id=$id");
    $row = $result->fetch_array();
  }
  ?>
  <form role="form" method="POST" action="datosPersonalesSubir.php">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default" style="background-color:#d1c4e9">
                <div class="panel-heading" style="background-color:#b71c1c; color:#fff">
                    <strong>Datos Personales</strong>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <input name="id" type="hidden" class="form-control" value="<?php echo $id ?>">

                                    <label>Código de Matricula</label>
                                    <input name="codigo_matricula" value="<?php echo $row['codigo_matricula'] ?>" placeholder="Ingrese los 10 digitos de su Clave de Matrícula" type="text" pattern="[0-9]{10}" class="form-control" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Clave</label>
                                    <input name="clave" value="<?php echo $row['clave'] ?>" placeholder="Ingrese una clave de acceso al sistema" type="password" class="form-control" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>DNI</label>
                                    <input name="dni" value="<?php echo $row['dni']; ?>" placeholder="Ingrese el # de su Documento de Identidad" type="text" pattern="[0-9]{8}" class="form-control" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Apellido Paterno</label>
                                    <input name="apellido_paterno" value="<?php echo $row['apellido_paterno']; ?>" placeholder="Apellido paterno" type="text" class="form-control" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Apellido Materno</label>
                                    <input name="apellido_materno" value="<?php echo $row['apellido_materno']; ?>" placeholder="Apellido materno" type="text" class="form-control" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Nombres</label>
                                    <input name="nombres" value="<?php echo $row['nombres']; ?>" placeholder="Nombres" type="text" class="form-control" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Fecha de Nacimiento</label>
                                    <input name="fecha_nacimiento" value="<?php echo $row['fecha_nacimiento']; ?>" placeholder="Ingrese su fecha de nacimiento" type="date" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group form-group-sm">
                                    <label>Sexo</label>
                                    <div class="radio">
                                        <label>
                                            <input name="sexo" type="radio" name="optionsRadios" id="optionFem" value="F" <?php if($row['sexo']=="F"){?>checked <?php } ?>>Femenino
                                        </label>
                                        <label>
                                            <input name="sexo" type="radio" name="optionsRadios" id="optionMasc" value="M" <?php if($row['sexo']=="M"){?> checked <?php } ?>>Masculino
                                        </label>
                                    </div>
                                  </div>
                              </div>

                              </div>
                            <!--input para telefono fijo-->
                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Teléfono fijo</label>
                                    <input name="phone_fijo" value="<?php echo $row['phone_fijo']; ?>" placeholder="Teléfono fijo" type="tel" pattern="[0-9]{6|7}" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Teléfono móvil</label>
                                    <input name="phone_celular" value="<?php echo $row['phone_celular']; ?>" placeholder="Teléfono móvil" type="tel" pattern="^[9]\d{8}$" class="form-control" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Correo electrónico</label>
                                    <input name="email" value="<?php echo $row['email']; ?>" type="email" class="form-control" placeholder="alguien@dominio.com">
                                </div>

                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Ciudad</label>
                                    <input name="ciudad" value="<?php echo $row['ciudad']; ?>" placeholder="Ciudad natal" type="text" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Región</label>
                                    <input name="region" value="<?php echo $row['region']; ?>" placeholder="Región" type="text" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label>Provincia</label>
                                  <input name="provincia" value="<?php echo $row['provincia']; ?>" placeholder="Provincia" type="text" class="form-control" placeholder="Ejm. Bachiller en Ciencias Ingeniería de Sistemas">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label>Distrito</label>
                                  <input name="distrito" value="<?php echo $row['distrito']; ?>" placeholder="Distrito" type="text" class="form-control" placeholder="23/11/1998" value="NULL">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input name="direccion" value="<?php echo $row['direccion']; ?>" placeholder="Dirección" type="text" class="form-control" placeholder="Ejm. Licenciado en Administración de Empresas" value="NULL">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input name="facebook" value="<?php echo $row['facebook']; ?>" placeholder="Dirección de Facebook" type="text" class="form-control" value="NULL">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Twiter</label>
                                    <input name="twiter" value="<?php echo $row['twiter']; ?>" placeholder="Dirección de twiter" type="text" class="form-control" placeholder="Ejm. Maestro en Ingeniería de Sistemas" value="NULL">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Linkedln</label>
                                    <input name="linkedln" value="<?php echo $row['linkedln']; ?>" placeholder="Dirección de Linkedln" type="text" class="form-control" value="NULL">
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
