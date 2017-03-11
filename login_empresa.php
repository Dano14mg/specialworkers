<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>Sistema generador de Hoja de Vida Laboral</title>
	
	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!--<div class="jumbotron text-center">
	  <h1>Sistema generador de hoja de vida laboral</h1>
	  <!--<p>Resize this responsive page to see the effect!</p>
	</div>-->
	<section class="container">
			<section class="login-form">
				<div class="panel panel-default">
					<div class="panel-heading">ACCESO USUARIO</div>
					<div class="panel-body">
					    <form method="post" action="validarUsuario_empresa.php" role="login">
							<input type="text" class="form-control input-lg" name="usuario" placeholder="NOMBRE DE USUARIO" required>
        					<input type="password" class="form-control input-lg" name="passwd" placeholder="CONTRASEÑA" required>
							
							<button type="submit" name="go" class="btn btn-lg btn-info btn-block">Entrar</button>
							
							<div class="form-links">
								<!--<span class="glyphicon glyphicon-question-sign text-primary"></span> <a href="#">Olvido su contraseña ?</a><br />-->
								<span class="glyphicon glyphicon-user text-primary"></span> <a href="registro_empresa.php">Crea una cuenta</a>
							</div>
							
						</form>
					</div>
				</div>
				
				<div class="external-links">
					<!--<a href="#">Do you need something ?</a>-->
					
					<font color="blue">Hack Puebla</font>
				</div>
				
			</section>
	</section>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>