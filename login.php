<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
  </head>
  <body class="">
    <div class="container ">
        <div class="row marginTop">
            <div class="col-md-4 col-md-offset-1">
              <img class="img-responsive"src="img/logopn.png" alt="">
            </div>
            <div class="col-md-5 col-md-offset-1 ">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-lock"></span> Ingreso al Sistema</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">
                                Código Matrícula</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Código de matrícula" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">
                                Clave</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Contraseña" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"/>
                                        Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success btn-sm">
                                    Ingresar</button>
                                     <button type="reset" class="btn btn-default btn-sm">
                                    Limpiar</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        Si no está registrado <a href="form.php">Registrate aqui</a></div>
                </div>
            </div>
        </div>
    </div>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  </body>
</html>
