<!DOCTYPE html>
<?php
	session_start();
	if (!isset($_SESSION['k_username'])){
		header("Location: login.php");
	}
?>
<html>
<head>
  <title>Perfil empresa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    body {
        position: relative; 
    }
    #perfil {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
    #oferta {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header" >
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div>
      <div class="collapse navbar-collapse " id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#perfil">Perfil de empresa</a></li>
          <li><a href="#oferta">Oferta laboral</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
		  <li><a href="#"><font color="white">Usuario:&nbsp &nbsp</font><font color="blue"><?php echo $_SESSION['k_username'];?></font></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Cerrar sesión</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>    

<!--<div class="container">-->
<div id="perfil" class="container-fluid">
  <h2>Datos de perfil</h2>


<hr>

  <form class="form-inline">

    <div class="row">
    <center>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="nombre">Nombre de la empresa:</label>
          <input type="email" class="form-control" id="nombre">
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label for="direcccion">Direccion:</label>
          <input type="text" class="form-control" id="dir">
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label for="telefon">Telefono:</label>
          <input type="tel" class="form-control" id="tel">
        </div>
      </div>
      </center>
  </div>


<hr>

  <div class="row">
  <center>
    <div class="col-sm-3">
        <div class="form-group">
          <label for="mail">E-mail:</label>
          <input type="email" class="form-control" id="mail">
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label for="fax">Fax:</label>
          <input type="tel" class="form-control" id="fax">
        </div>
        </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="encargado">Nombre del encargado:</label>
          <input type="text" class="form-control" id="encargado">
        </div>
      </div>
      </center>
  </div>


<hr>

<div class="row">

<div class="col-sm-12">
<center>
    <div class="form-group">
    
      <label for="descrip-emp">Descripcion de la empresa:</label>
      <!--<input type="text" class="form-control" id="descrip-emp">-->
      <textarea class="form-control" rows="1" name="descripcion" style="min-width: 80%" placeholder="Descripcion..."></textarea>
     
    </div>
    </center>
    </div>
    
</div>


<hr>
<br>
<center>
  <button type="submit" class="btn btn-default">Guardar</button>
  </form>
</center>
</div>
<!--</div>-->

<div id="oferta" class="container-fluid">
  <h2>Agregar oferta laboral</h2>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Agregar Vacante</button>
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
                <div class="form-group">Vacante:</label>
                  <input type="text" class="form-control" id="vacante" placeholder="Tipo de empleo" required>
                </div>
                <div class="form-group">
                  <label for="Direccion">Dirección:</label>
                  <input type="text" class="form-control" id="name-empr" placeholder="Dirección" required>
                </div>
                <div class="form-group">
                  <label for="estado">Estado:</label>
                  <input type="text" class="form-control" id="name-empr" placeholder="Estado" required>
                </div>
                <div class="form-group">
                  <label for="colonia">Colonia:</label>
                  <input type="text" class="form-control" id="name-empr" placeholder="Colonia" required>
                </div>
  <div class="form-group">
  <label for="descrip">Descripcion:</label>
                <textarea class="form-control" rows="1" name="descrip" style="min-width: 80%" placeholder="Descripcion..."></textarea>
  </div>
  <div class="form-group">
  <label for="requi">Requisitos:</label>
                <textarea class="form-control" rows="1" name="requisitos" style="min-width: 80%" placeholder="Requisitos..."></textarea>
  </div>
                <button type="submit" class="btn btn-info btn-lg" >Enviar</button>
                
            </form>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
