
<?php
	error_reporting( ~E_NOTICE ); // avoid notice

	require_once 'dbconfig.php';


//LISTAR Eventos
if(isset($_GET['id']))
{
	$id_evento = $_GET['id'];

	$stmt_listar = $DB_con->prepare('SELECT * FROM event WHERE id =:uid');
	$stmt_listar->execute(array(':uid'=>$id_evento));
	$listar_row = $stmt_listar->fetch(PDO::FETCH_ASSOC);
	extract($listar_row);
	}

///






	if(isset($_POST['btnsave']))
	{
		$username = $_POST['user_name'];// user name
		$userjob = $_POST['user_job'];// user email

		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];


		if(empty($username)){
			$errMSG = "Ingrese la descripción";
		}
		else if(empty($userjob)){
			$errMSG = "Ingrese el estado";
		}
		else if(empty($imgFile)){
			$errMSG = "Seleccione el archivo de imagen.";
		}
		else
		{
			$upload_dir = 'user_images/'; // upload directory

			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;

			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){
				// Check file size '1MB'
				if($imgSize < 1000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Su archivo es muy grande.";
				}
			}
			else{
				$errMSG = "Solo archivos JPG, JPEG, PNG & GIF son permitidos.";
			}
		}


		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO evidencias(ev_id,descripcion,estado,ev_img) VALUES(:ideve,:uname, :ujob, :upic)');
      $stmt->bindParam(':ideve',$id_evento);
			$stmt->bindParam(':uname',$username);
			$stmt->bindParam(':ujob',$userjob);
			$stmt->bindParam(':upic',$userpic);

			if($stmt->execute())
			{
				$successMSG = "Nuevo registro insertado correctamente ...";
				header("refresh:2;addnew.php?id=$id_evento"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "Error al insertar ...";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>select</title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/jquery.min.js"></script>
</head>
<body>


	<br>
    <div class="container">
			<div class="alert alert-info">
					<center><strong>Actividad: <?php echo $listar_row['title'];?></strong><center>
			</div>

    </div>


<div class="container">


<a class="btn btn-default" href="index.php"> <span class="glyphicon glyphicon-backward"></span> Regresar </a>
    	<h4>Agregar Nueva Evidencia</h4>



	<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>

<form method="post" enctype="multipart/form-data" class="form-horizontal">

	<table class="table table-bordered table-responsive">
		<input class="form-control" type="hidden" name="ideve"  value="<?php echo $id_evento; ?>" />

    <tr>
    	<td><label class="control-label">Descripción: </label></td>
        <td><input class="form-control" type="text" name="user_name" placeholder="Antes/Después" value="<?php echo $username; ?>" /></td>
    </tr>

    <tr>
    	<td><label class="control-label">Estado: </label></td>
        <td><input class="form-control" type="text" name="user_job" placeholder="Concluido/Pendiente" value="<?php echo $userjob; ?>" /></td>
    </tr>

    <tr>
    	<td><label class="control-label">Imágen.</label></td>
        <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
    </tr>

    <tr>
        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; guardar
        </button>
        </td>
    </tr>

    </table>

</form>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>



<?php

	require_once 'dbconfig.php';

	if(isset($_GET['delete_id']))
	{
		// select image from db to dele

		$stmt_select = $DB_con->prepare('SELECT * FROM evidencias WHERE img_id =:uid');
		$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("user_images/".$imgRow['ev_img']);
    $id_evento=$imgRow['ev_id'];
		// it will delete an actual record from db
		$stmt_delete = $DB_con->prepare('DELETE FROM evidencias WHERE img_id =:uid');
		$stmt_delete->bindParam(':uid',$_GET['delete_id']);
		$stmt_delete->execute();

		header("refresh:0;addnew.php?id=$id_evento");
	}

?>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes" />
<title>Evidencias</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<script src="bootstrap/js/jquery.min.js"></script>
</head>

<body>



<div class="container">

	<div class="page-header">
    	<h1 class="h2">Evidencias:</h1>
    </div>

<br />

<div class="row">
<?php

	$stmt = $DB_con->prepare('SELECT * FROM evidencias WHERE ev_id=:uide');
	$stmt->execute(array(':uide'=>$id_evento));
	$stmt->execute();

	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<div class="col-xs-3">
				<p class="page-header"><?php echo $descripcion."&nbsp;/&nbsp;".$estado; ?></p>
				<img src="user_images/<?php echo $row['ev_img']; ?>" class="img-rounded" width="250px" height="250px" />
				<p class="page-header">
				<span>
				<a class="btn btn-info" href="editform.php?edit_id=<?php echo $row['img_id'];?>&&eveid=<?php echo $id_evento;?>" title="click for edit" onclick="return confirm('va a editar, esta seguro ?')"><span class="glyphicon glyphicon-edit"></span> Editar</a>
				<a class="btn btn-danger" href="?delete_id=<?php echo $row['img_id']; ?>" title="click for delete" onclick="return confirm('va a borrar, esta seguro ?')"><span class="glyphicon glyphicon-remove-circle"></span> Borrar</a>
				</span>
				</p>
			</div>
			<?php
		}
	}
	else
	{
		?>
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Datos no encontrados ...
            </div>
        </div>
        <?php
	}

?>
</div>



<div class="alert alert-info">
    <center><strong>Evidencias de Actividades</strong><center>
</div>

</div>

<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
