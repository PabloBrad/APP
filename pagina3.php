<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <!---<meta name="viewport" content="width=device-width, initial-scale=1">--->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/uikit/2.22.0/css/uikit.almost-flat.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.css'>
      
    
 
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js?ver=3.1.2'></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?&sensor=true"></script>
<script async defer src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAO-ls6M5adafy1jxk_mfS5U0WsHl0gAEo&callback=inicializar"></script>   

    
<script type="text/javascript"> 
  /*  //AIzaSyBxWk-JBmQL2m3ZgeMx6JZsUrPLX4BRuF0
		var mapa;

		function inicializar() {
			var opciones = {
			  zoom: 16,
			  mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			mapa = new google.maps.Map(document.getElementById('mapa_content'), opciones);
			if (navigator.geolocation)
			{
			    //Hago el CallBack a mostrarLocalizacion
				navigator.geolocation.getCurrentPosition(mostrarLocalizacion,manejadorDeError);
			}
			else{
			    //Caso contraio muestro error
				alert("Su navegador no soporta Geolocalizacion");
				}
		}

	    function mostrarLocalizacion(posicion)
	     {
            var pos = new google.maps.LatLng(posicion.coords.latitude,posicion.coords.longitude);
            //Muestro un tooltip con un mensaje sobre el mapa
            var infowindow = new google.maps.InfoWindow({
              map: mapa,
              position: pos,
              content: 'Tu ubicacion usando HTML5.'
            });

            mapa.setCenter(pos);
	      }

	    function manejadorDeError(error) {

		   switch(error.code)
            {
                case error.PERMISSION_DENIED: alert("El usuario no permite compartir datos de geolocalizacion");
                break;

                case error.POSITION_UNAVAILABLE: alert("Imposible detectar la posicio actual");
                break;

                case error.TIMEOUT: alert("La posicion debe recuperar el tiempo de espera");
                break;

                default: alert("Error desconocido");
                break;
            }
			var opciones = {
			  map: mapa,
			  position: new google.maps.LatLng(60, 105),
			  content: content
			};
			var infowindow = new google.maps.InfoWindow(opciones);
			mapa.setCenter(opciones.position);
      }
      google.maps.event.addDomListener(window, 'load', inicializar);*/
    
    
    
    
    </script>    
    
    
    
    <style type="text/css">
    body {
        padding: 0;
        margin: 0;
    }

    #map{
      height:400px;
      align-content: center;
    }

    #locate-position{
      position:absolute;
      top:140px;
      left:25px;
      -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
      -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
      box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
    }
	</style>
    
    
</head>

<body style="background-image: url('img/cover_event.jpg');">
    
    
    <script>
        var etiqueta={
            psdc:{
                label:'Persona SdC'
            }
        };
        
        
    </script>
    
    
    
    
    
    
    
  <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
    <form action="php/logout.php" method="post">
     <div class="container">
      <a class="navbar-brand" href="index.php">
        <i class="fa d-inline fa-lg fa-cloud"></i>
        <b>Inicio</b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <a class="btn navbar-btn ml-2 text-white btn-secondary" href="pagina4.php">
          <i class="fa d-inline fa-lg fa-user-circle-o"></i>Salir</a>
      </div>
    </div>
    </form>
  </nav>
  <div class="p-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="uk-container uk-margin-top">
  <div class="uk-grid">
    <div class="uk-width-1-1">
      <div class="uk-panel uk-panel-box uk-panel-box-secondary uk-panel-header bg-secondary">
        <h3 class="uk-panel-title"><center>Encontra tu ONG</center></h3>
        <div id="map"></div>
        <button id="locate-position" class="uk-button uk-button-success"><i class="uk-icon-map-marker"></i></button>

        <button class="uk-button btn-primary" data-uk-modal="{target:'#nodal'}">Mostrar</button>
        <!-- This is the modal -->
        <div id="modal" class="uk-modal">
            <div class="uk-modal-dialog">
                <a class="uk-modal-close uk-close"></a>
                Modal Title
            </div>
        </div>

      </div>
    </div>
  </div>
</div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/2.22.0/js/uikit.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.js'></script>
    <script  src="js/index.js"></script>
</body>

</html>