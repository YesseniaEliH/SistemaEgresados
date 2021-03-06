<!DOCTYPE html>
<?php
session_start();
$nombre = $_SESSION['nombre'];
$apellidos = $_SESSION['apellidos'];
?>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Sistema de Egresados</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="assets/plugins/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="assets/css/header-v6.css">


	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/animate.css">
	<link rel="stylesheet" href="assets/plugins/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome.min.css">


	<!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->

	<!-- CSS Theme -->
	<link rel="stylesheet" href="assets/css/default.css" id="style_color">
	<link rel="stylesheet" href="assets/css/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
	<div class="wrapper">
		<!--=== Header v6 ===-->
		<div class="header-v6 header-classic-white header-sticky">
			<!-- Navbar -->
			<div class="navbar mega-menu" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="menu-container">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!-- Navbar Brand -->
						<div class="navbar-brand">
							<a href="menuAdmin.php">
								<img class="shrink-logo" src="img/logopn.png" alt="Logo"> Hola <strong> <?php echo utf8_encode($nombre.' '.$apellidos) ?></strong>
							</a>
						</div>
						<!-- ENd Navbar Brand -->
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<div class="menu-container">
							<ul class="nav navbar-nav">
								<!-- Home -->
								<li class="marginTopY">
									<div class="aniYess marginY">
										<a href="menuAdmin.php" class="letraY">
												Inicio
											</a>
									</div>
								</li>
								<!-- End Home -->

								<li class="dropdown marginTopY">
									<div class="aniYess marginY">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" style="color: white">Egresados
											<i class="fa fa-caret-down"></i>
										</a>
									</div>
	                    <ul class="dropdown-menu dropdown-tasks" style="margin-top: -10px;">
	                        <li>
	                            <a target="principal" href="php/datosPersonales.php">
	                                <div>
	                                    <strong>Datos Personales</strong>
	                                </div>
	                            </a>
	                        </li>
	                        <li class="divider"></li>
	                        <li>
	                            <a target="principal" href="php/datosAcademicosUniv.php">
	                                <div>
	                                    <strong>Datos Académicos Universitarios</strong>
	                                </div>
	                            </a>
	                        </li>
	                        <li class="divider"></li>
													<li>
															<a target="principal" href="php/datosAcademicos.php">
																	<div>
																			<strong>Datos Académicos Posgrado</strong>
																	</div>
															</a>
													</li>
													<li class="divider"></li>
	                        <li>
	                            <a target="principal" href="php/datosLaborales.php">
	                                <div>
	                                    <strong>Datos Laborales</strong>
	                                </div>
	                            </a>
	                        </li>
													<li class="divider"></li>
	                        <li>
														<a target="principal" href="form.php">
	                                <strong>Nuevo Egresado</strong>
	                                <i class="fa fa-angle-right"></i>
	                            </a>
	                        </li>
													<li class="divider"></li>
													<li>
														<a target="principal" href="php/datosTrabajo.php">
																	<strong>Reporte Trabajo Actual</strong>
																	<i class="fa fa-angle-right"></i>
															</a>
													</li>
	                    </ul>
	                    <!-- /.dropdown-tasks -->
	                </li>
								<!-- Pages -->
								<li class="marginTopY">
									<div class="aniYess marginY">
										<a target="principal" href="php/empresa.php" class="letraY">
											Empresa
										</a>
									</div>
								</li>
								<!-- End Pages -->

								<!-- Blog -->
								<li class="marginTopY">
									<div class="aniYess marginY">
										<a target="principal" href="php/oferta.php" class="letraY">
											Oferta de Empleo
										</a>
									</div>
								</li>
								<!-- End Blog -->

								<!-- Portfolio -->
								<li class="marginTopY">
									<div class="aniYess marginY">
										<a target="principal" href="php/usuario.php" class="letraY">
											Admin Usuario
										</a>
									</div>
								</li>
								<!-- End Portfolio -->


								<!-- Shortcodes -->
								<li class="marginTopY">
									<div class="aniYess marginY">
										<a href="index.html" class="letraY" >
											Salir
										</a>
									</div>
								</li>
								<!-- End Shortcodes -->

								<!-- Demo Pages -->
								<!-- End Demo Pages -->
							</ul>
						</div>
					</div><!--/navbar-collapse-->
				</div>
			</div>
			<!-- End Navbar -->
		</div>
		<!--=== End Header v6 ===-->
	<div class="container">
		<!--=== Search Block ===-->
			<iframe name="principal" src="menuContPrincipal.html" frameborder="0"  width="100%" height="900" background-color="transparent"; allowtransparency="true">
			</iframe>
		<!--=== Container Part ===-->
	</div>
	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="assets/plugins/jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery.parallax.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery.counterup.min.js"></script>

	<!-- JS Customization -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/plugins/style-switcher.js"></script>

<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->

</body>
</html>
