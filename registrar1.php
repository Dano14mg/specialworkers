<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registro</title>
        <!-- CSS -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Registro de Usuario</h1>
                        </div>
                    </div>
                    <br><br> 
                    <form action="validarRegistro.php" class="form-horizontal">
                        <div class="form-group">
                            <label for="correo" style="color: white;" class="control-label col-md-4">Correo:</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="email" placeholder="user@gmail.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="conf_correo"  style="color: white;" class="control-label col-md-4">Confirmación de correo:</label>
                            <div class="col-md-5">
                                <input type="password" class="form-control" id="passwd2" placeholder="user@gmail.com">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nombre" style="color: white;" class="control-label col-md-4">Usuario:</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="usuario" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" style="color: white;" class="control-label col-md-4">Contraseña:</label>
                            <div class="col-md-5">
                                <input type="password" class="form-control" id="passwd" placeholder="">
                            </div>
                        </div>
                            <br><br>
                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-5">
                                    <button class="btn btn-primary">Registrar</button>
                                </div>
                            </div>
                    </form> 
                </div>
            </div>
        </div>	
        <nav class="navbar navbar-default navbar-fixed-bottom">
                       <div class="container">
                        <br>
                            <ul class="list-inline">
                              <li class="list-inline-item" style="color: blue; font-size:15px;"><small>© 2017 IDISOFT</small></li>
                              <li class="list-inline-item"><a href="https://www.facebook.com/IDISOFT" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a> &nbsp; </li>
                              <li class="list-inline-item"><a href="https://twitter.com/IDISOFT" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a> &nbsp;</li>
                            </ul>
                     </div>
                   </nav> 
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>