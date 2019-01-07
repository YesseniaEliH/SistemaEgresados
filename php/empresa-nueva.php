<?php
require_once('headerA.php');
$conn = conectarse();
	$status_message = "";
	$status = "none";

	if(isset($_POST['submit'])){
		$id = $_POST["id"];
		$razon_social = $_POST["razon_social"];
		$nro_ruc = $_POST["nro_ruc"];
		$sector = $_POST["sector"];
		$pagina_web = $_POST["pagina_web"];
		$telefono_fijo = $_POST["telefono_fijo"];
		$telefono_celular = $_POST["telefono_celular"];

		 $result=$conn->query("INSERT INTO empresa
				(id_empresa
			   ,razon_social
				 ,nro_ruc
				 ,sector
				 ,pagina_web
				 ,telefono_fijo
				 ,telefono_celular)
				 VALUES ('$id'
				 ,'$razon_social'
				 ,'$nro_ruc'
				 ,'$sector'
				 ,'$pagina_web'
				 ,'$telefono_fijo'
			   ,'$telefono_celular')");

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
		                                    <input name="id" id="id" type="hidden" class="form-control" value="6">
		                                </div>
		                            </div>

		                            <div class="col-sm-4 col-sm-offset-4">
		                                <div class="form-group">
		                            		<label>Razón Social</label>
		                                	<input name="razon_social" id="razon_social" type="text" class="form-control">
		                                	<p class="help-block">Ingrese la razón social</p>
		                          		</div>
		                            </div>
																	<div class="col-sm-4 col-sm-offset-4">
																	 <div class="form-group">
																	 <label>Número de RUC</label>
																		 <input name="nro_ruc" id="nro_ruc" type="text" class="form-control">
																		 <p class="help-block">Ingrese Eel nro ode ruc de la empresa</p>
																 </div>
															 </div>

															 <div class="col-sm-4 col-sm-offset-4">
																 <label for="sector">Sector</label><br>
																 <div class="form-group">
																 <select class="selectpicker"name="sector" id="sector">
																	 	<option value="" selected>Seleccione un sector</option>
		 																	<option value="PRIVADO">PRIVADO</option>
		 																	<option value="PUBLICO">PÚBLICO</option>
		 															</select>
																</div>
															 </div>
															 <div class="col-sm-4 col-sm-offset-4">
																	<div class="form-group">
																	<label>Página Web</label>
																		<input name="pagina_web" id="pagina_web" type="text" class="form-control">
																		<p class="help-block">Ingrese la dirección de la página web</p>
																</div>
															</div>
															<div class="col-sm-4 col-sm-offset-4">
																 <div class="form-group">
																 <label>Teléfono Fijo</label>
																	 <input name="telefono_fijo" id="telefono_fijo" type="text" class="form-control">
																	 <p class="help-block">Ingrese el teléfono fijo</p>
															 </div>
														 </div>
														 <div class="col-sm-4 col-sm-offset-4">
																<div class="form-group">
																<label>Teléfono Celular</label>
																	<input name="telefono_celular" id="telefono_celular" type="text" class="form-control">
																	<p class="help-block">Ingrese el teléfono celular</p>
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
