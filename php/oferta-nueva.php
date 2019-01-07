<?php
require_once('headerA.php');
$conn = conectarse();
	$status_message = "";
	$status = "none";

	if(isset($_POST['submit'])){
		$id_bolsa = $_POST["id_bolsa"];
		$cargo = $_POST["cargo"];
		$empresa = $_POST["id_empresa"];
		$vacantes = $_POST["vacantes"];
		$salario = $_POST["salario"];
		$fecha_registro = $_POST["fecha_registro"];

		 $result=$conn->query("INSERT INTO bolsat
				(id_bolsa
			   ,cargo
				 ,empresa
				 ,vacantes
				 ,salario
				 ,fecha_registro)
				 VALUES ('$id_bolsa'
				 ,'$cargo'
				 ,'$empresa'
				 ,'$vacantes'
				 ,'$salario'
				 ,'$fecha_registro'
			   )");

		if ($result>=1){

				$status_message = " record inserted: ";
				$status = "success";

			}else{


				$status_message = 'error';
				$status = "error";

			}
	}
?>
<div class="container">
	<?php if($status != "none"){ ?>
		<?php if($status == "success"){ ?>

			<div class="alert alert-success alert-dismissible">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <strong>Success!</strong> <?php echo $status_message;?>
			</div>

		<?php }elseif($status == "error"){ ?>

			<div class="alert alert-danger alert-dismissible">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <strong>Error!</strong> <?php echo $status_message;?>
			</div>

		<?php } ?>
	<?php } ?>
<style>
	fieldset.scheduler-border {
	    border: 1px solid #121bb8 !important;
	    padding: 0 1.4em 1.4em 1.4em !important;
	    margin: 0 10px 1.5em 10px !important;
	    -webkit-box-shadow:  0px 0px 0px 0px #000;
	    box-shadow:  0px 0px 0px 0px #000;
	}

	legend.scheduler-border {
	    font-size: 1.2em !important;
	    font-weight: bold !important;
	    text-align: center; !important;
	    border:none;
		width:300px
	}
</style>

<form role="form" method="POST" action="">
	<fieldset class="scheduler-border">
		<legend class="scheduler-border">REGISTRO DE EMPRESAS</legend>
			<div class="row">
		        <div class="col-lg-12">
		            <!--<div class="panel panel-default">-->
		                <div class="panel-body">
		                    <div class="row">
		                        <div class="col-lg-12">
		                            <div class="col-sm-4 col-sm-offset-4 ">
		                                <div class="form-group">
		                                    <!--<label>Codigo de modulo</label>-->
		                                    <input name="id_bolsa" id="id_bolsa" type="hidden" class="form-control" value="4">
		                                </div>
		                            </div>

		                            <div class="col-sm-4 col-sm-offset-4">
		                                <div class="form-group">
		                            		<label>Cargo</label>
		                                	<input name="cargo" id="cargo" type="text" class="form-control">
		                                	<p class="help-block">Ingrese la razón social</p>
		                          		</div>
		                            </div>
																	<div class="col-sm-4 col-sm-offset-4">
																	 <div class="form-group">
																	 <label>Empresa</label>
																		 <select name="empresa" class="form-control" required>
																			 <?php

																				 $result5=$conn->query("SELECT * FROM empresa");
																				 while($row5 = $result5->fetch_array())
																				 {
																					 echo "<option  value='".$row5["id_empresa"]."'>".$row5["razon_social"]."</option>";
																				 }
																			 ?>
																		 </select>
															 	 </div>
															 </div>


															 <div class="col-sm-4 col-sm-offset-4">
																	<div class="form-group">
																	<label>Vacantes</label>
																		<input name="vacantes" id="vacantes" type="text" class="form-control">
																		<p class="help-block">Ingrese el número de vacantes para el puesto</p>
																</div>
															</div>
															<div class="col-sm-4 col-sm-offset-4">
																 <div class="form-group">
																 <label>Salario</label>
																	 <input name="salario" id="salario" type="text" class="form-control">
																	 <p class="help-block">Ingrese el salario</p>
															 </div>
														 </div>
														 <div class="col-sm-4 col-sm-offset-4">
																<div class="form-group">
																<label>Fecha de Registro</label>
																	<input name="fecha_registro" id="fecha_registro" type="date" class="form-control">
																	<p class="help-block">Ingrese la fecha de Registro</p>
															</div>
														</div>
		                            <div class="col-sm-4 col-sm-offset-5 col-xs-offset-3">
			                            <div class="form-group">
			                            	<button type="submit" name="submit" class="btn btn-success">Guardar</button>
			    													<button type="reset" class="btn btn-success">Limpiar</button>
			                        	</div>
			                        </div>
		                    	</div>
		                    <!-- /.row (nested) -->
		                	</div>
		                <!-- /.panel-body -->
		              	</div>
			        <!--</div>-->
		    	</div>
			</div>
	</fieldset>
</form>
<div class="col-sm-offset-2 col-sm-8">
	<p class="mensaje"></p>
</div>
<?php
require_once('footerA.php');
?>
