<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1">
<title>Registrarse</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/ewen-icons.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link rel="stylesheet" type="text/css" href="css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="icon" href="images/favicon.png"> 

</head>

<body>
<div class="jumbotron" style="height:100px; background-color:#4c4c4c; border-bottom: 4px solid green;">
          <div class="container">
            <div class="row">
                <div class="col-md-8 hidden-xs">
                 <h2 class="green_t">Registro</h2>
                </div>
                <div class="col-md-4 col-xs-12">
                  <center><img class="rounded-circle float-left img-fluid" src="images/logo-black.png" alt="Circle image"></center>
                </div>
            </div>
          </div>
          <br><br><br><br>
    <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container" >
                  <br>
                    <form method="post" action="validarRegistro.php" role="login" class="form-horizontal">

                        <div class="form-group">
                            <div class="control-label col-md-4">
                                <p class="green_t">Correo</p>
                              </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="email" placeholder="name@gmail.com">
                            </div>
                        </div>
                        <div class="form-group">
                              <div class="control-label col-md-4">
                                <p class="green_t">Usuario</p>
                              </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="usuario" placeholder="Nombre Paterno Materno">
                            </div>
                        </div>
                        <div class="form-group">
                             <div class="control-label col-md-4">
                                <p class="green_t">Contraseña</p>
                              </div>
                            <div class="col-md-5">
                                <input type="password" class="form-control" name="passwd" placeholder="">
                            </div>
                        </div>
						<div class="form-group">
                             <div class="control-label col-md-4">
                                <p class="green_t">Confirmación de contraseña</p>
                              </div>
                            <div class="col-md-5">
                                <input type="password" class="form-control" name="passwd2" placeholder="">
                            </div>
                        </div>
						<div class="form-group"><div class="col-md-12 col-md-offset-4"><font color="red"><li>Registro incorrecto, nombre de usuario existente</li></font></div></div>
                            <br><br>
                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-5">
                                  <button type="submit" name="go" class="btn_border btn_default active">GUARDAR </button>
                                    
                                </div>
                            </div>
                    </form> 
                </div>
            </div>
        </div>  
<!-- LOADER -->
<div class="loader">
  <div class="loader_inner">
    <div class="la-ball-circus">
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
    </div>
  </div>
</div>
<!--LOADER Ends-->


  <nav class="navbar  navbar-fixed-bottom copyright dark">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
        <ul class="list-inline">
          <li class="list-inline-item" style="color: green;">© 2017 IDISOFT</li>
          <li class="list-inline-item"><a href="https://www.facebook.com/IDISOFT" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a> &nbsp; </li>
          <li class="list-inline-item"><a href="https://twitter.com/IDISOFT" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-twitter" ></i></a> &nbsp;</li>
        </ul>
        </div>
      </div>
  </div>
</nav> 


<script src="js/jquery-2.2.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.actions.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.kenburn.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/functions.js"></script>
        
</body>
</html>