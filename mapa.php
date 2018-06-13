<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Calcular distancia entre cidades (mapas e rotas)</title>
    <script src="http://code.jquery.com/jquery-1.8.1.js" type="text/javascript"></script>
</head>
<body>
    <!-- Parâmetro sensor é utilizado somente em dispositivos com GPS -->
    <script src="http://maps.google.com/maps/api/js?sensor=true&key=AIzaSyA3frGfKLCczK2SjrxuYMrJg5O_LL45boA"></script>
    <script type="text/javascript">
        function CalculaDistancia() {
            $('#litResultado').html('Aguarde...');
            //Instanciar o DistanceMatrixService
            var service = new google.maps.DistanceMatrixService();
            //executar o DistanceMatrixService
            service.getDistanceMatrix(
            {
                  //Origem
                  origins: [$("#txtOrigem").val()],
                  //Destino
                  destinations: [$("#txtDestino").val()],
                  //Modo (DRIVING | WALKING | BICYCLING)
                  travelMode: google.maps.TravelMode.WALKING,
                  //Sistema de medida (METRIC | IMPERIAL)
                  unitSystem: google.maps.UnitSystem.METRIC,
                  //Vai chamar o callback
              }, callback);
        }
        //Tratar o retorno do DistanceMatrixService
        function callback(response, status) {
            //Verificar o Status
            if (status != google.maps.DistanceMatrixStatus.OK)
                //Se o status não for "OK"
                $('#litResultado').html(status);
            else {
                //Se o status for OK
                //Endereço de origem = response.originAddresses
                //Endereço de destino = response.destinationAddresses
                //Distância = response.rows[0].elements[0].distance.text
                //Duração = response.rows[0].elements[0].duration.text
                $('#litResultado').html("<strong>Origem</strong>: " + response.originAddresses +
                    "<br /><strong>Destino:</strong> " + response.destinationAddresses +
                    "<br /><strong>Distância</strong>: " + response.rows[0].elements[0].distance.text +
                    " <br /><strong>Duração</strong>: " + response.rows[0].elements[0].duration.text
                    );
                //Atualizar o mapa
                $("#map").attr("src", "https://maps.google.com/maps?saddr=" + response.originAddresses + "&daddr=" + response.destinationAddresses + "&output=embed");
            }
        }
    </script>
    <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <?php $id = $_GET['id']; ?>
    <form action="processa_horario.php?id=<?=$id?>" method="POST">
        Nome:<input type="text" name="nome" placeholder="Nome"><br><br>
        Parada de Origem<input type="text" name="paradaorigem" id="txtOrigem" placeholder="Parada de Origem"><br><br>
        Parada de Destino<input type="text" name="paradadestino" id="txtDestino" placeholder="Parada de Destino"><br><br>
        Horário:<select name="horario">
            <option value="00:00 - 00:15">00:00 - 00:15</option>
            <option value="00:15 - 00:30">00:15 - 00:30</option>
            <option value="00:30 - 00:45">00:30 - 00:45</option>
            <option value="00:45 - 01:00">00:45 - 01:00</option>

            <option value="01:00 - 01:15">01:00 - 01:15</option>
            <option value="01:15 - 01:30">01:15 - 01:30</option>
            <option value="01:30 - 01:45">01:30 - 01:45</option>
            <option value="01:45 - 02:00">01:45 - 02:00</option>

            <option value="02:00 - 02:15">02:00 - 02:15</option>
            <option value="02:15 - 02:30">02:15 - 02:30</option>
            <option value="02:30 - 02:45">02:30 - 02:45</option>
            <option value="02:45 - 03:00">02:45 - 03:00</option>

            <option value="03:00 - 03:15">03:00 - 03:15</option>
            <option value="03:15 - 03:30">03:15 - 03:30</option>
            <option value="03:30 - 03:45">03:30 - 03:45</option>
            <option value="03:45 - 04:00">03:45 - 04:00</option>

            <option value="04:00 - 04:15">04:00 - 04:15</option>
            <option value="04:15 - 04:30">04:15 - 04:30</option>
            <option value="04:30 - 04:45">04:30 - 04:45</option>
            <option value="04:45 - 05:00">04:45 - 05:00</option>

            <option value="05:00 - 05:15">05:00 - 05:15</option>
            <option value="05:15 - 05:30">05:15 - 05:30</option>
            <option value="05:30 - 05:45">05:30 - 05:45</option>
            <option value="05:45 - 06:00">05:45 - 06:00</option>

            <option value="06:00 - 06:15">06:00 - 06:15</option>
            <option value="06:15 - 06:30">06:15 - 06:30</option>
            <option value="06:30 - 06:45">06:30 - 06:45</option>
            <option value="06:45 - 07:00">06:45 - 07:00</option>

            <option value="07:00 - 07:15">07:00 - 07:15</option>
            <option value="07:15 - 07:30">07:15 - 07:30</option>
            <option value="07:30 - 07:45">07:30 - 07:45</option>
            <option value="07:45 - 08:00">07:45 - 08:00</option>

            <option value="08:00 - 08:15">08:00 - 08:15</option>
            <option value="08:15 - 08:30">08:15 - 08:30</option>
            <option value="08:30 - 08:45">08:30 - 08:45</option>
            <option value="08:45 - 09:00">08:45 - 09:00</option>

            <option value="09:00 - 09:15">09:00 - 09:15</option>
            <option value="09:15 - 09:30">09:15 - 09:30</option>
            <option value="09:30 - 09:45">09:30 - 09:45</option>
            <option value="09:45 - 10:00">09:45 - 10:00</option>

            <option value="10:00 - 10:15">10:00 - 10:15</option>
            <option value="10:15 - 10:30">10:15 - 10:30</option>
            <option value="10:30 - 10:45">10:30 - 10:45</option>
            <option value="10:45 - 11:00">10:45 - 11:00</option>

            <option value="11:00 - 11:15">11:00 - 11:15</option>
            <option value="11:15 - 11:30">11:15 - 11:30</option>
            <option value="11:30 - 11:45">11:30 - 11:45</option>
            <option value="11:45 - 12:00">11:45 - 12:00</option>

            <option value="12:00 - 12:15">12:00 - 12:15</option>
            <option value="12:15 - 12:30">12:15 - 12:30</option>
            <option value="12:30 - 12:45">12:30 - 12:45</option>
            <option value="12:45 - 13:00">12:45 - 13:00</option>

            <option value="13:00 - 13:15">13:00 - 13:15</option>
            <option value="13:15 - 13:30">13:15 - 13:30</option>
            <option value="13:30 - 13:45">13:30 - 13:45</option>
            <option value="13:45 - 14:00">13:45 - 14:00</option>

            <option value="14:00 - 14:15">14:00 - 14:15</option>
            <option value="14:15 - 14:30">14:15 - 14:30</option>
            <option value="14:30 - 14:45">14:30 - 14:45</option>
            <option value="14:45 - 15:00">14:45 - 15:00</option>

            <option value="15:00 - 15:15">15:00 - 15:15</option>
            <option value="15:15 - 15:30">15:15 - 15:30</option>
            <option value="15:30 - 15:45">15:30 - 15:45</option>
            <option value="15:45 - 16:00">15:45 - 16:00</option>

            <option value="16:00 - 16:15">16:00 - 16:15</option>
            <option value="16:15 - 16:30">16:15 - 16:30</option>
            <option value="16:30 - 16:45">16:30 - 16:45</option>
            <option value="16:45 - 17:00">16:45 - 17:00</option>

            <option value="17:00 - 17:15">17:00 - 17:15</option>
            <option value="17:15 - 17:30">17:15 - 17:30</option>
            <option value="17:30 - 17:45">17:30 - 17:45</option>
            <option value="17:45 - 18:00">17:45 - 18:00</option>

            <option value="18:00 - 18:15">18:00 - 18:15</option>
            <option value="18:15 - 18:30">18:15 - 18:30</option>
            <option value="18:30 - 18:45">18:30 - 18:45</option>
            <option value="18:45 - 19:00">18:45 - 19:00</option>

            <option value="19:00 - 19:15">19:00 - 19:15</option>
            <option value="19:15 - 19:30">19:15 - 19:30</option>
            <option value="19:30 - 19:45">19:30 - 19:45</option>
            <option value="19:45 - 20:00">19:45 - 20:00</option>

            <option value="20:00 - 20:15">20:00 - 20:15</option>
            <option value="20:15 - 20:30">20:15 - 20:30</option>
            <option value="20:30 - 20:45">20:30 - 20:45</option>
            <option value="20:45 - 21:00">20:45 - 21:00</option>

            <option value="21:00 - 21:15">21:00 - 21:15</option>
            <option value="21:15 - 21:30">21:15 - 21:30</option>
            <option value="21:30 - 21:45">21:30 - 21:45</option>
            <option value="21:45 - 22:00">21:45 - 22:00</option>

            <option value="22:00 - 22:15">22:00 - 22:15</option>
            <option value="22:15 - 22:30">22:15 - 22:30</option>
            <option value="22:30 - 22:45">22:30 - 22:45</option>
            <option value="22:45 - 23:00">22:45 - 23:00</option>

            <option value="23:00 - 23:15">23:00 - 23:15</option>
            <option value="23:15 - 23:30">23:15 - 23:30</option>
            <option value="23:30 - 23:45">23:30 - 23:45</option>
            <option value="23:45 - 00:00">23:45 - 00:00</option>
        </select><br><br>
        <input type="button" value="Calcular dist&acirc;ncia" onclick="CalculaDistancia()" class="btnNew" />
        <input type="submit" value="Enviar">

    </form>
        <!--<tbody>
            <tr>
                <td>
                    <label for="txtOrigem"><strong>Endere&ccedil;o de origem</strong></label>
                    <input type="text" id="txtOrigem" class="field" style="width: 400px" />

                </td>
            </tr>
            <tr>
                <td>
                    <label for="txtDestino"><strong>Endere&ccedil;o de destino</strong></label>
                    <input type="text" style="width: 400px" class="field" id="txtDestino" />

                </td>
            </tr>
            <tr>
                <td>
                    <input type="button" value="Calcular dist&acirc;ncia" onclick="CalculaDistancia()" class="btnNew" />
                </td>
            </tr>
        </tbody>-->
    </table>
    <div><span id="litResultado">&nbsp;</span></div>
    <div style="padding: 10px 0 0; clear: both">
        <iframe width="750" scrolling="no" height="350" frameborder="0" id="map" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?saddr=são paulo&daddr=rio de janeiro&output=embed"></iframe>
    </div>