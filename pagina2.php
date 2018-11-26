<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
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

<body style="background-image: url('img/cover_event.jpg');">
  <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
   <form action="php/logout.php" method="post">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <i class="fa d-inline fa-lg fa-cloud"></i>
        <b>Inicio</b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="submit" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <a class="btn navbar-btn ml-2 text-white btn-secondary" href="">
          <i class="fa d-inline fa-lg fa-user-circle-o"></i>Salir</a>
      </div>
    </div>
    </form>
  </nav>
  <?php
        include "php/conexion.php";
        session_start();
    
        if(!isset($_SESSION['sess_user'])){
            
            header("Location: pagina4.php");
        }
  ?>
  
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 bg-dark w-50 h-50 mx-auto">
          <h1 class="text-light text-center">¿Con que desea colaborar?</h1>
          <form method="post" action="php/datos.php">
            <div class="form-group">
              <label for="InputName" class="text-light"></label>
            </div>
            <div class="form-group">
              <label for="InputEmail1" class="text-light">Comida</label>
                <br>
              <input type="radio" name="c" value="1" checked> Si
                <br>
              <input type="radio" name="c" value="0"> No
            </div>
            <div class="form-group">
                <label for="InputEmail1" class="text-light">Abrigo</label>
              <br>
              <input type="radio" name="a" value="1" checked> Si
                <br>
              <input type="radio" name="a" value="0"> No
            </div>
            <div class="form-group">  
            <label for="InputEmail1" class="text-light text-center">Emergencia</label>
                <br>
              <input type="radio" name="e" value="1" checked> Si
                <br>
              <input type="radio" name="e" value="0"> No  
            <input type="submit" class="btn text-center w-100 text-dark btn-primary my-3" name="boton" value="Enviar">
            </div>
            </form>
            <form action="" method="post">
            <input type="submit" class="btn text-center w-100 text-dark btn-primary my-3" value="Llamar al 911"><a href="tel:+54 911"></a>
          <input type="submit" class="btn text-center w-100 text-dark btn-primary my-3" value="Dar de Baja">
                  
          </form>
          
          
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>