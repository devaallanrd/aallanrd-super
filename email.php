<?php

 $nombre  = $_POST['nombre'];
 $email  = $_POST['email'];
 $mensajex = $_POST['mensaje'];



// Varios destinatarios
$para  = 'developer.aallanrd@gmail.com' . ', '; // atención a la coma
$para .= 'aallanrd@gmail.com';

// título
$titulo = 'Mensaje WebMail';

// mensaje
$mensaje = "
<html>
<head>
  <title>Nuevo Mensaje </title>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <style>
    .weird { color: blue}
  </style>
</head>
<body class="jumbotron">
  <p>Nuevo Mensaje del sitio Web UI!</p>
  <hr>
  <h2>Nombre:  $nombre
  <h3>Email:  $email  </h3></h2>
  <h4>Mensaje:  $mensajex</h4>
  <button class="btn btn-primary btn-lg"> Button Test 1 </button>
  <button class="weird btn  btn-lg" style="color: blue;"> Button Test 2 </button>
  <hr>
</body>
</html>
";

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: Allan <allanjose91@gmail.com>,   ALlan<aallanrd@gmail.com>' . "\r\n";
$cabeceras .= 'From: AllanRD <aallanrd@gmail.com>' . "\r\n";
$cabeceras .= 'Cc: allanjose91@gmail.com' . "\r\n";
$cabeceras .= 'Bcc: allanjose91@gmail.com' . "\r\n";

// Enviarlo
mail($para, $titulo, $mensaje, $cabeceras);
Header ( 'Location : http://aallanrd.com' );
exit;


?>