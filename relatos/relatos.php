
<!-- Página apois logar -->
<?php $id = $_GET['id']; ?>
<!DOCTYPE html >
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title>Localização de Usuários</title>
	<style>
      /* Always set the map height explicitly to define the size of the div
      * element that contains the map. */
      #map {
      	height: 90%;
      	padding: 10px 0 0;
      	clear: both;
      	margin-left: 400px;
      	margin-top: 5%;
      }
      #a{
      	height: 80%;
      	padding: 10px 0 0;
      	clear: both;
      	margin-left: 80px;
      	margin-top: -500px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
      	height: 100%;
      	margin: 0;
      	padding: 0;
      }
      #relatos{
        height: 70px;
        width: 50px;
        padding: 10px 0 0;
        clear: both;
        margin-left: 80px;
        margin-top: -550px;
      }
  </style>
</head>

<body>
	<?php include_once "../menu.php" ?>
	<div id="map"></div><br><br>
  <div id="relatos">
	   <a href="cads_relatos.php?id=<?=$id?>" class="btn btn-custom btn-lg" style="width: 500%;">Cadastrar Relato</a>
  </div>
	<div id="a">

	</div>

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
          		// Cria atributos para o marcador
              var name = markerElem.getAttribute('name');
          		var address = markerElem.getAttribute('address');
              var content = markerElem.getAttribute('content');
              var date = markerElem.getAttribute('date');
          		var turno = markerElem.getAttribute('turno');
          		var point = new google.maps.LatLng(
          			parseFloat(markerElem.getAttribute('lat')),
          			parseFloat(markerElem.getAttribute('lng')));

          		var infowincontent = document.createElement('div');
          		
              // Atribui o valor ao atributo
              var strong = document.createElement('strong');
          		strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              infowincontent.appendChild(document.createElement('br'));
              //var icon = customLabel['R'] || {};
              var data = document.createElement('text');
              data.textContent = date
              infowincontent.appendChild(data);
              infowincontent.appendChild(document.createElement('br'));
              
              
              var turn = document.createElement('text');
              turn.textContent = turno
              infowincontent.appendChild(turn);
              infowincontent.appendChild(document.createElement('br'));

              var conteudo = document.createElement('text');
              conteudo.textContent = content
              infowincontent.appendChild(conteudo);
              infowincontent.appendChild(document.createElement('br'));
              


              var marker = new google.maps.Marker({
              	map: map,
                position: point,
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
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3frGfKLCczK2SjrxuYMrJg5O_LL45boA&callback=initMap">
</script>
</body>
</html>