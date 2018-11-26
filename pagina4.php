<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" lang="es">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body style="background-image: url('img/cover_event.jpg');<nav class=&quot;navbar navbar-expand-md navbar-dark bg-secondary&quot;>     <div class=&quot;container&quot;>       <a class=&quot;navbar-brand&quot; href=&quot;#&quot;><i class=&quot;fa d-inline fa-lg fa-cloud&quot;></i><b>Inicio</b></a>       <button class=&quot;navbar-toggler navbar-toggler-right&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#navbar2SupportedContent&quot;> <span class=&quot;navbar-toggler-icon&quot;></span> </button>       <div class=&quot;collapse navbar-collapse text-center justify-content-end&quot; id=&quot;navbar2SupportedContent&quot;>                  <a class=&quot;btn navbar-btn ml-2 text-white btn-secondary&quot;><i class=&quot;fa d-inline fa-lg fa-user-circle-o&quot;></i>Entrar</a>       </div>     </div>   </nav>');background-image: url('https://pingendo.github.io/templates/sections/assets/cover_event.jpg');">
  <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
      
<?php 
      if(isset($_GET['error'])){echo "<script>alert('".$_GET['error']."')</script>";} 
      
?>
    <div class="container">
      <a class="navbar-brand" href="index.php" >
        <i class="fa d-inline fa-lg fa-cloud"></i>
        <b>Inicio</b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <a class="btn navbar-btn ml-2 text-white btn-secondary" href="pagina4.php" >
          <i class="fa d-inline fa-lg fa-user-circle-o"></i>Entrar</a>
      </div>
    </div>
  </nav>
  <div class="py-5" style="background-position: center top;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-1 text-center">Ingresa tus datos</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-white" style="background-position: center center;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 bg-dark w-50 h-50 mx-auto" style="background-image: url('<div class=&quot;col-md-12 bg-dark w-50 h-50 mx-auto&quot;>           <h1 class=&quot;text-light&quot;>Ingresa tus datos</h1>           <form>             <div class=&quot;form-group&quot;>               <label for=&quot;InputName&quot; class=&quot;text-light&quot;>Nombre de Usuario</label>               <input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;InputName&quot; placeholder=&quot;Pepe la rana&quot;> </div>             <div class=&quot;form-group&quot;>               <label for=&quot;InputEmail1&quot; class=&quot;text-light&quot;>Contraseña</label>               <input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;InputEmail1&quot; placeholder=&quot;****&quot;> </div>                        </form>           <button type=&quot;submit&quot; class=&quot;btn text-center w-100 text-dark btn-light my-3&quot;>Crear Cuenta</button><button type=&quot;submit&quot; class=&quot;btn text-center w-100 text-dark btn-light my-0&quot;>Registrarse</button><button type=&quot;submit&quot; class=&quot;btn text-center w-100 text-dark btn-light my-3&quot;>Recuperar Cuenta</button>         </div>');">
          <h1 class="text-light">Ingresa tus datos</h1>
          <form action="php/login.php" method="post">
            <div class="form-group">
              <label for="InputName" class="text-light">Nombre de Usuario</label>
              <input type="text" class="form-control" id="InputName" name="correonick" placeholder="Pepe la rana"> </div>
            <div class="form-group">
              <label for="InputEmail1" class="text-light">Contraseña</label>
              <input type="password" class="form-control" name="pwd" id="InputEmail1" placeholder="****"> </div>
               <input type="submit" name="boton"class="btn text-center w-100 text-dark btn-primary btn-light my-3" value="Iniciar sesion">
          </form>
         
<!--          <button type="submit" class="btn text-center w-100 text-dark btn-primary btn-light my-0"></button>-->
         <!-- <button type="submit" class="btn text-center w-100 text-dark btn-primary btn-light my-3">Recuperar Cuenta</button>-->
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>