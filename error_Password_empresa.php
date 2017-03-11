<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Registration Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets2/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets2/css/form-elements.css">
        <link rel="stylesheet" href="assets2/css/style.css">

    </head>

    <body>
		<div class="container">
			<div class="navbar-header text" >
                <h1><strong>Nombre de la web</strong></h1>
			</div>
		</div>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text">
                            <h1><strong>Descripcion del porque unirse</strong></h1>
                            <div class="description">
                            	<p>
	                            	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Registrate aqui!</button>
                            	</p>
                            </div>
                        </div>
                        <div class="col-sm-5 form-box">
                        	
                               
                            		<div class="form-top">
                                    <center>
                            			<h3>Inicia sesión</h3>
                                        </center>
                                	</div>
                                
                            
                            <div class="form-bottom">
			                    <form role="login" action="validarUsuario_empresa.php" method="post" class="registration-form">
			                    	<div class="form-group">
			                    		
			                        	<input type="text" name="id_user" placeholder="ID-Usuario" class="form-first-name form-control" id="form-first-name" required>
			                        </div>
			                        <div class="form-group">
			                        	
			                        	<input type="password" name="pass" placeholder="Contraseña" class="form-last-name form-control" id="form-last-name" required>
			                         </div>
									 <center><div class="form-group"><font color="red"><li>Contraseña incorrecta</li></font></div></center>
                                     <center>
			                        <button type="submit" name="go" class="btn btn-primary">Accesar</button>
                                    </center>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <hr>
        <div id="sitefooter" class="row">
            <p class="center"><small>© 2017 IDISOFT</small></p>
            <p class="social-links center">
            <a href="https://www.facebook.com/IDISOFT" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a> &nbsp; 
            <a href="https://twitter.com/IDISOFT" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a> &nbsp; 
   
            </p>
        </div>

          <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Rellena los campos correctamente</h4>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Correo electronico" required>
                </div>
                <div class="form-group">
                  <label for="Nombre-empre">Nombre de su empresa:</label>
                  <input type="text" class="form-control" id="name-empr" placeholder="Empresa" required>
                </div>
        
                <button type="submit" class="btn btn-default" >Enviar</button>
                
            </form>
      </div>
      
    </div>
  </div>
  
</div>


        <!-- Javascript -->
        <script src="assets2/js/jquery-1.11.1.min.js"></script>
        <script src="assets2/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets2/js/jquery.backstretch.min.js"></script>
        <script src="assets2/js/retina-1.1.0.min.js"></script>
        <script src="assets2/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>		