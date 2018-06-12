<?php $id = $_GET['id']; ?>
<!DOCTYPE html >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Localização de Usuários</title>

    <!-- Favicons ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png"> 

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Slider ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300" rel="stylesheet" type="text/css">
    <style>
      /* Always set the map height explicitly to define the size of the div
      * element that contains the map. */
      #map {
        margin-top: 100px;
        height: 80%;
        right: 40%;
        height: 100%;
        margin-right:210px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation
    ==========================================-->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand page-scroll" href="#page-top">Simbora</a> 
        </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#about" class="page-scroll">Sobre</a>
            </li>
            <li>
              <a href="#services" class="page-scroll">Serviços</a>
            </li>
            <!--<li><a href="#portfolio" class="page-scroll">Gallery</a></li>
            <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>-->
            <li>
              <a href="#contact" class="page-scroll">Fale Conosco</a>
            </li>
          </ul>
        </div>
           <!-- /.navbar-collapse --> 
      </div>
         <!-- /.container-fluid --> 
    </nav>
       <!--______________________________________________-->
    <div id="map"></div><br><br>
    <a href="cads_horarios.php?id=<?=$id?>">Cadastre seu Horário</a><br>
    <a href="cads_lugar.php?id=<?=$id?>">Cadastre sua Rotina</a><br>
    <a href="sair.php">Sair</a>
    
    <script>
      /*var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };*/

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-7.840372, -34.909090),
          zoom: 5
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('resultado.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var destino = markerElem.getAttribute('destino');
              var point = new google.maps.LatLng(
                parseFloat(markerElem.getAttribute('lat')),
                parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              //var icon = customLabel['R'] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                //label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



        function downloadUrl(url, callback) {
          var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

          request.onreadystatechange = function() {
            if (request.readyState == 4) {
              request.onreadystatechange = doNothing;
              callback(request, request.status);
            }
          };

          request.open('GET', url, true);
          request.send(null);
        }

        function doNothing() {}
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3frGfKLCczK2SjrxuYMrJg5O_LL45boA&callback=initMap">
    </script>
  </div>
</body>
</html>