<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  </head>
  <?php
  session_start();
  if(isset($_GET['codigoAlumno'])){
    include("../bd/conexion.php");
    $con=conectarse();
    $cod=$_GET['codigoAlumno'];
    $result=$con->query("SELECT * FROM egresado WHERE codigo_matricula='$cod'");
    $row = $result->fetch_array();
  }
  ?>
  <body>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Actualiza tus datos</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form role="form" method="post" action="updateEgresado.php">
      <div class="row">
          <div class="col-lg-12">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      Información Básica
                  </div>
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-lg-6">

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Código de Matricula</label>
                                      <input name="e[]" type="text" pattern="[0-9]{10}" class="form-control" value="<?php echo $cod ?>" readonly required="">
                                      <p class="help-block">Ingrese su código de Matrícula.</p>
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Clave</label>
                                    <input name="e[]" type="text" class="form-control" value="<?php echo $row['clave'] ?>">
                                    <p class="help-block">Ingrese su clave.</p>
                                </div>
                              </div>

                            <!--nivel de usuario-->
                            <div class="col-sm-4">
                                    <input name="e[]" type="hidden" class="form-control" value="USUARIO">
                              </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>DNI</label>
                                      <input name="e[]" type="text" pattern="[0-9]{8}" class="form-control" value="<?php echo $row['dni']; ?>" required="">
                                      <p class="help-block">Ingrese su DNI.</p>
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Fecha de Nacimiento</label>
                                      <input name="e[]" type="date" class="form-control" value="<?php echo $row['fecha_nacimiento']; ?>" required="">
                                      <p class="help-block">Ingrese su fecha de Nacimiento.</p>
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Apellido Paterno</label>
                                      <input name="e[]" type="text" pattern="[A-ZÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ]{1,100}" class="form-control" value="<?php echo $row['apellido_paterno']; ?>" required="">
                                      <p class="help-block">Ingrese su apellido paterno aqui.</p>
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Apellido Materno</label>
                                      <input name="e[]" type="text" pattern="[A-ZÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ]{1,100}" class="form-control" value="<?php echo $row['apellido_materno']; ?>" required="">
                                      <p class="help-block">Ingrese su apellido materno aqui.</p>
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Nombres</label>
                                      <input name="e[]" type="text" pattern="[A-ZÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ]{1,200}" class="form-control" value="<?php echo $row['nombres']; ?>" required="">
                                      <p class="help-block">Ingrese sus nombres.</p>
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <div class="radio">
                                        <label>
                                            <input name="e[]" type="radio" name="optionsRadios" id="optionFem" value="F" <?php if($row['sexo']=="F"){?>checked <?php } ?>>Femenino
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input name="e[]" type="radio" name="optionsRadios" id="optionMasc" value="M" <?php if($row['sexo']=="M"){?> checked <?php } ?>>Masculino
                                        </label>
                                    </div>
                                  </div>
                              </div>

                            <!--input para codigo de ciudad-->
                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Código de ciudad</label>
                                    <input name="e[]" type="text" pattern="[0-9]{2|3}" class="form-control" value="<?php echo $row['codigo_ciudad']; ?>">
                                    <p class="help-block">Ingrese código de ciudad.</p>
                                </div>

                              </div>
                            <!--input para telefono fijo-->
                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Teléfono fijo</label>
                                    <input name="e[]" type="tel" pattern="[0-9]{6|7}" class="form-control" value="<?php echo $row['phone_fijo']; ?>">
                                    <p class="help-block">Ingrese su telefono fijo.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Teléfono móvil</label>
                                      <input name="e[]" type="tel"  value="<?php echo $row['phone_celular']; ?>" pattern="^[9]\d{8}$" class="form-control">
                                      <p class="help-block">Ingrese su celular.</p>
                                 </div>
                             </div>

                            <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Correo electrónico</label>
                                      <input name="e[]" type="email" class="form-control" value="<?php echo $row['email']; ?>" placeholder="alguien@dominio.com" required="">
                                  </div>
                                </div>



                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Año Ingreso</label>
                                      <input name="e[]" type="year" class="form-control" value="<?php echo $row['anio_ingreso']; ?>">
                                      <p class="help-block">Ingrese el año de ingreso.</p>
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Año Egreso</label>
                                      <input name="e[]" type="year" class="form-control" value="<?php echo $row['anio_egreso']; ?>">
                                      <p class="help-block">Ingrese el año de egreso.</p>
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                    <label>Fecha de bachiller</label>
                                    <input name="e[]" type="date" class="form-control" placeholder="23/11/1998"value="<?php echo $row['fecha_bach']; ?>">
                                    <p class="help-block">Ingrese fecha de expedición de bachiller.</p>
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Grado de bachiller</label>
                                    <input name="e[]" type="text" class="form-control" placeholder="Ejm. Bachiller en Ciencias Ingeniería de Sistemas" value="<?php echo $row['grado_bach']; ?>">
                                    <p class="help-block">Ingrese su grado de bachiller.</p>
                                </div>
                              </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Grado Título</label>
                                      <input name="e[]" type="text" class="form-control" value="<?php echo $row['grado_titulo']; ?>"placeholder="Ejm. Bachiller en Ciencias Ingeniería de Sistemas">
                                  </div>
                                </div>

                                <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Año de título</label>
                                    <input name="e[]" type="text" class="form-control" value="<?php echo $row['anio_titulo']; ?>">
                                    <p class="help-block">Ingrese año de expedición de titulo.</p>
                                </div>
                              </div>

                                <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Grado de maestro</label>
                                    <input name="e[]" type="text" class="form-control" placeholder="Ejm. Maestro en Ingeniería de Sistemas" value="<?php echo $row['grado_maestro']; ?>"">
                                    <p class="help-block">Ingrese su grado de maestro.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Año de maestría</label>
                                    <input name="e[]" type="text" class="form-control" value="<?php echo $row['anio_maestro']; ?>"">
                                    <p class="help-block">Ingrese año de expedición de maestría.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Grado de doctor</label>
                                    <input name="e[]" type="text" class="form-control" placeholder="Ejm. Licenciado en Administración de Empresas" value="<?php echo $row['grado_doctor']; ?>"">
                                    <p class="help-block">Ingrese su grado de doctor.</p>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Año de doctorado</label>
                                    <input name="e[]" type="text" class="form-control" value="<?php echo $row['anio_doctor']; ?>"">
                                    <p class="help-block">Ingrese año de expedición de doctorado.</p>
                                </div>
                              </div>

                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Numero de Carrera</label>
                                      <input name="e[]" type="number" step="any" min="1" max="3" class="form-control" value="<?php echo $row['num_carrera_profesional']; ?>">
                                  </div>
                                </div>
                          </div>
                          <!-- /.col-lg-6 (nested) -->
                      </div>
                      <!-- /.row (nested) -->
                  </div>
                  <!-- /.panel-body -->
                </div>

            	<!--panel de domicilio actual-->
              <div class="panel panel-default">
                  <div class="panel-heading">
                      Domicilio Actual
                  </div>
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-lg-6">
                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Región</label>
                                      <input name="e[]" type="text" class="form-control" value="<?php echo $row['region']; ?>">
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Provincia</label>
                                      <input name="e[]" type="text" class="form-control" value="<?php echo $row['provincia']; ?>">
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Distrito</label>
                                      <input name="e[]" type="text" class="form-control" value="<?php echo $row['distrito']; ?>">
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                      <label>Dirección</label>
                                      <input name="e[]" type="text" class="form-control" value="<?php echo $row['direccion']; ?>">
                                  </div>
                                </div>
                          </div>
                          <!-- /.col-lg-6 (nested) -->
                      </div>
                      <!-- /.row (nested) -->
                  </div>
              </div>

              <!--panel de referencia del trabajo-->
              <div class="panel panel-default">
                <div class="panel-heading">
                   Datos del Trabajo Actual
                </div>
                <div class="panel-body">
                    <div class="row">
                          <div class="col-lg-6">

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Estado actual del trabajo</label>
                                    <p class="help-block"> <h6>¿Usted esta laborando actualmente?</h6></p>
                                    <p></p>
                                    		<select name="e[]" class="selectpicker form-control" required>
                                  				<option value="SI">Si</option>
                    											<option value="NO">No</option>

                                  			</select>

                                  </div>
                                  <p class="help-block"><h6>Si su respuesta es afirmativa rellene los siguientes campos.</h6></p>
                              </div>

                              <div class="col-sm-4">
                                <label>Condición</label>
                                <div class="form-group">
                            		<select name="e[]" class="selectpicker form-control" required>
                            				<option value="" selected disabled hidden>Seleccione la condición</option>
                            				<option value="NOMBRADO">Nombrado</option>
              											<option value="CONTRATADO">Contratado</option>
              											<option value="OTRO">Otro</option>
                            			</select>
                          		   </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Empresa</label>
                                    <input name="e[]" type="text" class="form-control" value="<?php echo $row['empres_w']; ?>">
                                </div>
                              </div>

                               <div class="col-sm-4">
                                <label>Sector</label>
                                <div class="form-group">
                            		<select name="e[]" class="selectpicker form-control" required>
                            				<option value="" selected disabled hidden>Seleccione el sector</option>
                            				<option value="PUBLICO">Público</option>
  											<option value="PRIVADO">Privado</option>
  											<option value="OTRO">Otro</option>
                            			</select>
                          		   </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Cargo</label>
                                    <input name="e[]" type="text" class="form-control" value="<?php echo $row['cargo_w']; ?>" ">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Sueldo</label>
                                    <div class="input-group">
                                    	<span class="input-group-addon">S/.</span>
                                    	<input name="e[]" type="text" class="form-control" value="<?php echo $row['sueldo_w']; ?>"">
                                    </div>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Dirección laboral</label>
                                    <input name="e[]" type="text" class="form-control" value="<?php echo $row['direccion_w']; ?>"">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Región</label>
                                    <input name="e[]" type="text" class="form-control" value="<?php echo $row['region_w']; ?>"">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Provincia</label>
                                    <input name="e[]" type="text" class="form-control" value="<?php echo $row['provincia_w']; ?>"">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Distrito</label>
                                    <input name="e[]" type="text" class="form-control" value="<?php echo $row['distrito_w']; ?>"">
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

      <button type="submit" class="btn btn-success">Actualizar</button>
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
