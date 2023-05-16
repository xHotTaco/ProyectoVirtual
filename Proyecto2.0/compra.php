<?php
 session_start();
 include('conn.php');

 if(isset($_SESSION['correo'])){
     $sesion = true;

     $identificador = $_SESSION['correo'];
     $buscarUsuario = $con->query("SELECT * FROM usuarios WHERE correo='$identificador'");

     $row = $buscarUsuario->fetch_array();

     $nombre = $row['nombre'];
     $tipe = $row['tipo'];

 }

 else {
     $sesion = false;
 }


 if(!$sesion) {
    echo "<script>
            alert('Para finalizar tu compra, primero inica sesion');
            location.href = 'login.html';
          </script>";
 }

 else { ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <img src="img/gracias.gif" alt="">
    
</body>
</html>


 <?php }
