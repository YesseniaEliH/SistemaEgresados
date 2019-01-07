<DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
  // error_reporting( ~E_NOTICE );
      include("../bd/conexion.php");
      $con=conectarse();

      // require_once 'dbconfig.php';
    //   //imagen de egresado
    //   $imgFile = $_FILES['user_image']['name'];
    //   $tmp_dir = $_FILES['user_image']['tmp_name'];
    //   $imgSize = $_FILES['user_image']['size'];
    //
    //   $upload_dir = 'user_images/'; // upload directory
    //
    //   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
    //
    //   // valid image extensions
    //   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
    //
    //   // rename uploading image
    //   $userpic = rand(1000,1000000).".".$imgExt;
    //
    //   // allow valid image file formats
    //   if(in_array($imgExt, $valid_extensions)){
    //     // Check file size '1MB'
    //     if($imgSize < 1000000)				{
    //       move_uploaded_file($tmp_dir,$upload_dir.$userpic);
    //     }
    //     else{
    //       $errMSG = "Su archivo es muy grande.";
    //     }
    //   }
    //   else{
    //     $errMSG = "Solo archivos JPG, JPEG, PNG & GIF son permitidos.";
    //   }
    // //termina parte de imagen egresado

      $id = $_POST['id'];
      $codigo_matricula=$_POST['codigo_matricula'];
      $clave=$_POST['clave'];
      $dni=$_POST['dni'];
      $fecha_nacimiento=$_POST['fecha_nacimiento'];
      $apellido_paterno=$_POST['apellido_paterno'];
      $apellido_materno=$_POST['apellido_materno'];
      $nombres=$_POST['nombres'];
      $sexo=$_POST['sexo'];
      if ( empty ( $_POST['phone_fijo'] ) ) {
        $phone_fijo=0;}
      else {
      $phone_fijo=$_POST['phone_fijo']; }
      $phone_celular=$_POST['phone_celular'];
      if ( empty ( $_POST['email'] ) ) {
        $email='NULL';}
      else {
        $email=$_POST['email'];}
      if ( empty ( $_POST['ciudad'] ) ) {
        $ciudad='NULL';}
      else {
        $ciudad=$_POST['ciudad'];}
      if ( empty ( $_POST['region'] ) ) {
        $region='NULL';}
      else {
        $region=$_POST['region'];}
      if ( empty ( $_POST['provincia'] ) ) {
        $provincia='NULL';}
      else {
        $provincia=$_POST['provincia'];}
      if ( empty ( $_POST['distrito'] ) ) {
        $distrito='NULL';}
      else {
        $distrito=$_POST['distrito'];}
      if ( empty ( $_POST['direccion'] ) ) {
        $direccion='NULL';}
      else {
        $direccion=$_POST['direccion'];}
      if ( empty ( $facebook ) ) {
        $facebook='NULL';}
      else {
        $facebook=$_POST['facebook'];}
      if ( empty ( $_POST['twiter'] ) ) {
        $twiter='NULL';}
      else {
        $twiter=$_POST['twiter'];}
      if ( empty ( $_POST['linkedln'] ) ) {
        $linkedln='NULL';}
      else {
      $linkedln=$_POST['linkedln'];}

      $anio_ingreso=$_POST['anio_ingreso'];
      $anio_egreso=$_POST['anio_egreso'];

      $segunda_carrera=$_POST['segunda_carrera'];

      if ( empty ( $_POST['nombre_segunda_carrera'] ) ) {
        $nombre_segunda_carrera='NULL';}
      else {
        $nombre_segunda_carrera=$_POST['nombre_segunda_carrera'];}
      if ( empty ( $_POST['univ_segunda_carrera'] ) ) {
        $univ_segunda_carrera='NULL';}
      else {
        $univ_segunda_carrera=$_POST['univ_segunda_carrera'];}
      if ( empty ( $_POST['anio_ingreso_sc'] ) ) {
          $anio_ingreso_sc='NULL';}
      else {
      $anio_ingreso_sc=$_POST['anio_ingreso_sc'];}
      if ( empty ( $_POST['anio_egreso_sc'] ) ) {
          $anio_egreso_sc='NULL';}
      else {
      $anio_egreso_sc=$_POST['anio_egreso_sc'];}

      if ( empty ( $_POST['tipoform'] ) ) {
        $tipoform='NULL';}
      else {
      $tipoform=$_POST['tipoform'];}

      if ( empty ( $_POST['institucion'] ) ) {
        $institucion='NULL';}
      else {
      $institucion=$_POST['institucion'];}
      if ( empty ( $_POST['fechainicio'] ) ) {
        $fechainicio='NULL';}
      else {
      $fechainicio=$_POST['fechainicio'];}
      if ( empty ( $_POST['fechafin'] ) ) {
        $fechafin='NULL';}
      else {
      $fechafin=$_POST['fechafin'];}
      if ( empty ( $_POST['mencion'] ) ) {
        $mencion='NULL';}
      else {
      $mencion=$_POST['mencion'];}
      if ( empty ( $_POST['pais'] ) ) {
        $pais='NULL';}
      else {
      $pais=$_POST['pais'];}

      if ( empty ( $_POST['condicion_w'] ) ) {
        $condicion_w='NULL';}
      else {
      $condicion_w=$_POST['condicion_w'];}
      if ( empty ( $_POST['empresa_w'] ) ) {
        $empresa_w='NULL';}
      else {
      $empresa_w=$_POST['empresa_w'];}
      if ( empty ( $_POST['sector_w'] ) ) {
        $sector_w='NULL';}
      else {
      $sector_w=$_POST['sector_w'];}
      if ( empty ( $_POST['area_w'] ) ) {
        $area_w='NULL';}
      else {
      $area_w=$_POST['area_w'];}
      if ( empty ( $_POST['cargo_w'] ) ) {
        $cargo_w='NULL';}
      else {
      $cargo_w=$_POST['cargo_w'];}
      if ( empty ( $_POST['sueldo_w'] ) ) {
        $sueldo_w='NULL';}
      else {
      $sueldo_w=$_POST['sueldo_w'];}
      if ( empty ( $_POST['direccion_w'] ) ) {
        $direccion_w='NULL';}
      else {
      $direccion_w=$_POST['direccion_w'];}
      if ( empty ( $_POST['region_w'] ) ) {
        $region_w='NULL';}
      else {
      $region_w=$_POST['region_w'];}
      if ( empty ( $_POST['provincia_w'] ) ) {
        $provincia_w='NULL';}
      else {
      $provincia_w=$_POST['provincia_w'];}
      if ( empty ( $_POST['distrito_w'] ) ) {
        $distrito_w='NULL';}
      else {
      $distrito_w=$_POST['distrito_w'];}
      $estado_w = $_POST['estado_w'];
      $fecha_registro = $_POST['fecha_registro'];

      $nroid1=$con->query("SELECT MAX(idda) as maximo1 FROM datosacadem");
       $r1 = $nroid1->fetch_array();
       $max1=$r1['maximo1']+1;

       $nroid2=$con->query("SELECT MAX(iddl) as maximo2 FROM datoslaborales");
        $r2 = $nroid2->fetch_array();
        $max2=$r2['maximo2']+1;

        $nroid3=$con->query("SELECT MAX(id_te) as maximo3 FROM trabajoeg");
         $r3 = $nroid3->fetch_array();
         $max3=$r3['maximo3']+1;

         $nroid4=$con->query("SELECT MAX(iddau) as maximo4 FROM datosacadem_univ");
          $r4 = $nroid4->fetch_array();
          $max4=$r4['maximo4']+1;

          // $nroid5=$con->query("SELECT MAX(id_img) as maximo5 FROM f_egresado");
          //  $r5 = $nroid5->fetch_array();
          //  $max5=$r5['maximo5']+1;

      $sql1 = "INSERT INTO egresado (id,codigo_matricula,clave,dni,fecha_nacimiento,apellido_paterno,apellido_materno,
                              nombres,sexo,phone_fijo,phone_celular,email,ciudad,region,provincia,distrito,direccion,facebook,
                              twiter,linkedln)
                    VALUES ($id, '$codigo_matricula', '$clave', $dni, '$fecha_nacimiento', '$apellido_paterno',
                            '$apellido_materno', '$nombres', '$sexo', $phone_fijo, $phone_celular, '$email', '$ciudad',
                            '$region', '$provincia', '$distrito', '$direccion', '$facebook', '$twiter', '$linkedln') ";
      $sql2 = "INSERT INTO datosacadem (idda, id_egresado, tipoform, institucion, fechainicio, fechafin, mencion, pais)
                VALUES ($max1, $id, '$tipoform', '$institucion', '$fechainicio', '$fechafin', '$mencion', '$pais')";
      $sql3 = "INSERT INTO datoslaborales(iddl, id_egresado, condicion_w, empresa_w, sector_w, area_w, cargo_w, sueldo_w, direccion_w,
                                          region_w, provincia_w, distrito_w)
                VALUES ($max2, $id, '$condicion_w', '$empresa_w', '$sector_w', '$area_w', '$cargo_w', '$sueldo_w', '$direccion_w',
                      '$region_w', '$provincia_w', '$distrito_w')";
      $sql4 = "INSERT INTO trabajoeg (id_te, id_egresado, estado_w, fecha_registro)
                VALUES ($max3, $id, '$estado_w', '$fecha_registro')";
      $sql5 = "INSERT INTO datosacadem_univ (iddau, id_egresado, anio_ingreso, anio_egreso, segunda_carrera, nombre_segunda_carrera, univ_segunda_carrera, anio_ingreso_sc, anio_egreso_sc)
                VALUES ($max4, $id, $anio_ingreso, $anio_egreso,'$segunda_carrera', '$nombre_segunda_carrera','$univ_segunda_carrera', '$anio_ingreso_sc', '$anio_egreso_sc')";
      // $sql6 = "INSERT INTO f_egresado (id_img, id_egresado, eg_img)
                // VALUES ($max5, $id, '$imgFile')";


                      if ($con->query($sql1) === TRUE) {
                        echo "Datos personales almacenados <br>";
                        if ($con->query($sql2) === TRUE) {
                          echo "Datos universitarios almacenados <br>";
                          if ($con->query($sql3) === TRUE) {
                              echo "Datos de posgrado almacenados <br>";
                              if ($con->query($sql4) === TRUE) {
                                echo "Datos laborales almacenados <br>";
                                if ($con->query($sql5) === TRUE) {
                                  echo "Bien!";
                                  // if ($con->query($sql5) === TRUE) {
                                  //   echo "Record 6 was updated";
                                  // }else {
                                  //   echo 'fallo 6';
                                  //   echo $errMSG;
                                  //   echo "Error: " . $sql6 . "<br>" . $con->error;
                                  // }
                                }else {
                                  echo 'fallo 5';
                                  echo "Error: " . $sql5 . "<br>" . $con->error;}
                              }else {
                                echo 'fallo 4';
                                echo "Error: " . $sql4 . "<br>" . $con->error;}
                          }else {
                            echo 'fallo 3';
                            echo "Error: " . $sql3 . "<br>" . $con->error;}
                        }else {
                            echo 'fallo 2';
                            echo "Error: " . $sql2 . "<br>" . $con->error;}
                      } else {
                          echo 'Falló algo';
                          echo "Error: " . $sql1 . "<br>" . $con->error;
                      }


                      $con->close();
     ?>
  </body>
</html>
