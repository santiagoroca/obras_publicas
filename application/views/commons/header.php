<html>
	
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<!-- Custom Styles -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css">
		<!-- Jquery -->
		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="topbar">
			<a href="<?=base_url()?>obras/list_form" class="header-link col-md-offset-3 col-md-6">
				<img class="img-height" alt="Obras Públicas Pcia. de Córdoba" src="<?=base_url()?>assets/img/topbar_logo.jpg" >
			</a>
		</div>
		<nav class="navbar navbar-default bar-border-radius">
			<div class="container-fluid col-md-6 col-md-offset-3">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?=base_url()?>obras/list_form">Obras</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="#">Autoridades</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi Cuenta<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Mis Datos</a></li>
								<li><a href="#">Cargar Obra</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Salir</a></li>
							</ul>
						</li>
					</ul>
					</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>