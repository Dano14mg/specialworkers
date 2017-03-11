<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Special Workers</title>

        <!-- CSS -->
		<script src="http://code.responsivevoice.org/responsivevoice.js"></script>
        <link rel="stylesheet" href="assets1/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets1/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets1/css/form-elements.css">
        <link rel="stylesheet" href="assets1/css/style.css">

    </head>

    <body>
        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><img src="images/logo1.png" class="" alt="imagen thumbnail" width="200" height="130"></h1>
								
                        </div>
                    </div>
            <div class="row-center">
                        
                        	<div class="form-top">
                        		<div class="form-top-left-inline-center">
									<center>
											 <div class="panel panel-default">
												
                        			<h3>Bienvenido</h3>
												
												</div>
									</center>
								</div>

                    <div class="row-inline-center">
                        <div class="col-lg-4">
                            <div class="center">
								<center>
								<a href="login_usuario.php"target="">
                                <img src="assets1\img\ico1.png" class="img-circle" alt="imagen thumbnail" width="130" height="120">
								</a>
                               
                                <p>Discapacidad Auditiva.</p>
								</center>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="center">
								<center>
								<p id="bienvenida">Si tiene discapacidad visual, mueva el mouse hacia abajo de la pantalla para ingresar al registro para invidentes.</p>
								<a href="login_usuario.php" target="">
                                <img id="Visual" src="assets1\img\ico2.png" class="img-circle" alt="imagen thumbnail" width="130" height="120">
								</a>
                                
                                <p>Discapacidad Visual.</p>
								</center>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="center-justify">
								<center>
								<a href="login_usuario.php"target="">
                                <img src="assets1\img\ico3.png" class="img" alt="imagen thumbnail" width="130" height="120">
								</a>
                                
								<p>Discapacidad Motríz.</p>
								</center>
                            </div>
                        </div>

					</div>
				</div>
            
			</div>
                    <div id="sitefooter" class="row">
                        <div class="col-lg-12">
                            <hr>
                                 <div class="row-center">
                                    <h4 style="color:black;">¿Eres empresa y quieres registrar una vacante o iniciar sesión?</h4>
                                    <button type="button" class="btn btn-primary active" onclick="location.href='index-empresas1.php';">Click aqui!</button>
                                 </div>

                            <hr>
                            <p class="center"><small>© 2017 IDISOFT</small></p>
                            <p class="social-links center">
                                <a href="https://www.facebook.com/IDISOFT" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a> &nbsp; 
                                <a href="https://twitter.com/IDISOFT" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a> &nbsp; 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	

<script>
document.getElementById("Visual").onmouseover= function () {voiceStartCallback()};
function voiceStartCallback() {
    console.log("Voice ended");
	responsiveVoice.speak("Registro para invidentes","Spanish Female", parameters);
}
var parameters = {
    onstart: voiceStartCallback,
    onend: voiceEndCallback
}
</script>
<script>
document.getElementById("bienvenida").onmouseover= function () {bienvenida()};
function bienvenida() {
    console.log("Voice ended");
	responsiveVoice.speak("Si tiene discapacidad visual, mueva el mouse hacia abajo de este texto para poder accesar.","Spanish Female", parameters);
}
var parameters = {
    onstart: voiceStartCallback,
    onend: voiceEndCallback
}
</script>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>


    </body>

</html>