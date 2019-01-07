<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrar Egresado</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
          <h1 class="page-header letraYess">Registro de Egresado</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <?php
        include("bd/conexion.php");
        $con=conectarse();
        $result2=$con->query("SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'bd_egresados' AND TABLE_NAME = 'egresado'");
          $row = $result2->fetch_array();
          $nroid=$con->query("SELECT MAX(id) as maximo FROM egresado");
           $r = $nroid->fetch_array();
           $max=$r['maximo'];
      ?>
  <form role="form" method="post" action="php/subirEgresado.php">
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
                                	<!--input que genera id autoincrementado de acuerdo al id maximo de la tabla-->
                                    <input name="id" type="hidden" class="form-control" value="<?php echo($max) + 1; ?>">
                                    <label>Código de Matricula</label>
                                    <input name="codigo_matricula" placeholder="Ingrese los 10 digitos de su Clave de Matrícula" type="text" pattern="[0-9]{10}" class="form-control" required onfocus="">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Clave</label>
                                    <input name="clave" placeholder="Ingrese una clave de acceso al sistema" type="password" class="form-control" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>DNI</label>
                                    <input name="dni" placeholder="Ingrese el # de su Documento de Identidad" type="text" pattern="[0-9]{8}" class="form-control" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Fecha de Nacimiento</label>
                                    <input name="fecha_nacimiento" placeholder="Ingrese su fecha de nacimiento" type="date" class="form-control" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Apellido Paterno</label>
                                    <input name="apellido_paterno" placeholder="Apellido paterno" type="text" class="form-control" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Apellido Materno</label>
                                    <input name="apellido_materno" placeholder="Apellido materno" type="text" class="form-control" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Nombres</label>
                                    <input name="nombres" placeholder="Nombres" type="text" class="form-control" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group form-group-sm">
                                    <label>Sexo</label>
                                    <div class="radio">
                                        <label>
                                            <input name="sexo" type="radio" id="optionFem" value="F" checked>Femenino
                                        </label>
                                        <label>
                                            <input name="sexo" type="radio" id="optionMasc" value="M">Masculino
                                        </label>
                                    </div>
                                  </div>
                              </div>

                              </div>
                            <!--input para telefono fijo-->
                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Teléfono fijo</label>
                                    <input name="phone_fijo" placeholder="Teléfono fijo" type="tel" pattern="[0-9]{6|7}" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Teléfono móvil</label>
                                    <input name="phone_celular" placeholder="Teléfono móvil" type="tel" pattern="^[9]\d{8}$" class="form-control" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Correo electrónico</label>
                                    <input name="email" type="email" class="form-control" placeholder="alguien@dominio.com" required>
                                </div>

                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Ciudad</label>
                                    <input name="ciudad" placeholder="Ciudad natal" type="text" class="form-control" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Región</label>
                                    <input name="region" placeholder="Región" type="text" class="form-control" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label>Provincia</label>
                                  <input name="provincia" placeholder="Provincia" type="text" class="form-control" placeholder="Ejm. Bachiller en Ciencias Ingeniería de Sistemas" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label>Distrito</label>
                                  <input name="distrito" placeholder="Distrito" type="text" class="form-control" placeholder="23/11/1998">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label>Dirección</label>
                                  <input name="direccion" placeholder="Dirección" type="text" class="form-control" placeholder="Ejm. Licenciado en Administración de Empresas" required>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input name="facebook" placeholder="Dirección de Facebook" type="text" class="form-control">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Twiter</label>
                                    <input name="twiter" placeholder="Dirección de twiter" type="text" class="form-control" placeholder="Ejm. Maestro en Ingeniería de Sistemas" >
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>linkedln</label>
                                    <input name="linkedln" placeholder="Dirección de Linkedln" type="text" class="form-control">
                                </div>
                              </div>
                              <!-- <div class="col-sm-4">
                                <div class="form-group">
                                  <label class="control-label">Imagen.</label>
                                  <input class="input-group" type="file" name="user_image" accept="image/*" />
                                </div>
                              </div> -->
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->

                  <div class="panel-heading" style="background-color:#1b5e20; color:#fff">
                      <strong>Datos Académicos Universitarios</strong>
                  </div>
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-lg-12">
                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Año de Ingreso</label>
                                      <input name="anio_ingreso" value="" placeholder="Año de Ingreso" type="year" class="form-control" placeholder="Año de ingreso" required>
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Año de Egreso</label>
                                      <input name="anio_egreso" value="" placeholder="Año de egreso" type="year" class="form-control" required>
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group form-group-sm">
                                      <label>¿Ha estudiado una segunda carrera?</label>
                                      <div class="radio">
                                          <label>
                                              <input name="segunda_carrera" type="radio" id="optionSi" value="SI" checked>SI
                                          </label>
                                          <label>
                                              <input name="segunda_carrera" type="radio" id="optionNo" value="NO">NO
                                          </label>
                                      </div>
                                    </div><br>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Nombre Segunda Carrera</label>
                                      <input name="nombre_segunda_carrera" placeholder="Si contestó SI. ¿Cuál es su segunda carrera?" type="text" class="form-control">
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Universidad</label>
                                      <input name="univ_segunda_carrera" placeholder="Universidad Segunda Carrera" type="text" class="form-control">
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Año de Ingreso</label>
                                      <input name="anio_ingreso_sc" value="" placeholder="Año de Ingreso" type="year" class="form-control" placeholder="Año de ingreso" value="NULL">
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Año de Egreso</label>
                                      <input name="anio_egreso_sc" value="" placeholder="Año de egreso" type="year" class="form-control" value="NULL">
                                  </div>
                                </div>
                          </div>
                          <!-- /.col-lg-6 (nested) -->
                      </div>
                      <!-- /.row (nested) -->
                  </div>
                  <div class="panel-heading" style="background-color:#1b5e20; color:#fff">
                      <strong>Datos Académicos Posgrado</strong>
                  </div>
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-lg-12">
                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Formación</label>
                                      <select name="tipoform" class="selectpicker form-control">
                                        <option value="" selected disabled hidden>Seleccione la Formación</option>
                                        <option value="MAESTRIA">MAESTRIA</option>
                                        <option value="DOCTORADO">DOCTORADO</option>
                                        <option value="SEGUNDA ESPECIALIDAD PROFESIONAL">SEGUNDA ESPECIALIDAD PROFESIONAL</option>
                                        <option value="OTRO">OTRO</option>
                                      </select>
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Institución</label>
                                      <input name="institucion" placeholder="Ingrese la Institución" type="text" class="form-control">
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Fecha Inicio</label>
                                      <input name="fechainicio" placeholder="Ingrese la fecha de inicio de la formación" type="date" class="form-control">
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Fecha Fin</label>
                                      <input name="fechafin" placeholder="Ingrese la fecha fin de la formación" type="date" class="form-control">
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Mención</label>
                                      <input name="mencion" placeholder="Mención de Formación" type="text" class="form-control">
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Pais</label>
                                      <input name="pais" placeholder="Pais" type="text" class="form-control">
                                  </div>
                                </div>
                          </div>
                          <!-- /.col-lg-6 (nested) -->
                      </div>
                      <!-- /.row (nested) -->
                  </div>
                  <!-- /.panel-body -->
                  <div class="panel-heading" style="background-color:#1a237e; color:#fff">
                      <strong>Datos Laborales</strong>
                  </div>
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <input name="fecha_registro" type="hidden" class="form-control" value="<?php date_default_timezone_set('America/Lima');
                                    echo "&nbsp;".date("YY/mm/dd"); ?>">
                                    <label>¿Usted esta laborando actualmente?</label>
                                        <select name="estado_w" class="selectpicker form-control" required>
                                          <option value="SI">SI</option>
                                          <option value="NO">NO</option>
                                        </select>
                                        <br>
                                        <label><strong><h5>Rellene los datos de su última experiencia laboral:</h5></strong></label>
                                  </div>
                              </div>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Condición</label>
                                      <select name="condicion_w" class="selectpicker form-control">
                                        <option value="" selected disabled hidden>Seleccione la condición</option>
                                        <option value="NOMBRADO">NOMBRADO</option>
                                        <option value="CONTRATADO">CONTRATADO</option>
                                        <option value="OTRO">OTRO</option>
                                      </select>
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Empresa</label>
                                      <input name="empresa_w" placeholder="Ingrese la empresa" type="text" class="form-control">
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                 <div class="form-group">
                                   <label>Sector</label>
                                    <select name="sector_w" class="selectpicker form-control">
                                       <option value="" selected disabled hidden>Seleccione el sector</option>
                                       <option value="PUBLICO">PÚBLICO</option>
                                       <option value="PRIVADO">PRIVADO</option>
                                       <option value="OTRO">OTRO</option>
                                   </select>
                                  </div>
                               </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Área</label>
                                      <input name="area_w" placeholder="Ingrese el área de trabajo" type="text" class="form-control">
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Cargo</label>
                                      <input name="cargo_w" placeholder="Ingrese la fecha fin de la formación" type="text" class="form-control">
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Sueldo</label>
                                      <input name="sueldo_w" placeholder="Ingrese el sueldo" type="text" class="form-control">
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Dirección</label>
                                      <input name="direccion_w" placeholder="Ingrese la dirección de su trabajo" type="text" class="form-control">
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Región</label>
                                      <input name="region_w" placeholder="Ingrese la región" type="text" class="form-control">
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Provincia</label>
                                      <input name="provincia_w" placeholder="Ingrese la provincia" type="text" class="form-control">
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Distrito</label>
                                      <input name="distrito_w" placeholder="Ingrese el distrito" type="text" class="form-control">
                                  </div>
                                </div>
                          </div>
                          <!-- /.col-lg-6 (nested) -->
                      </div>
                      <!-- /.row (nested) -->
                  </div>
                  <!-- /.panel-body -->
                </div>
                <!-- /.panel-body -->
              </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <center>
      <button type="submit" class="btn btn-success">Grabar</button>
      <button type="reset" class="btn btn-default">Limpiar</button>
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
