<?php

include ('conn.php');

$correo=$_POST['correo'];
$contra=$_POST['contra'];

$consulta=mysqli_query($con, "SELECT *from usuarios where correo='$correo' && contra='$contra'");

if ($rows = mysqli_fetch_array($consulta)) {
    session_start();
    $_SESSION['correo'] = $correo;
    $tipo = $rows['tipo'];
    if ($tipo==1) {
        header("location: tablaAdmin.php");
    } else {
        header("location: index.php");
    }
    


    echo "<script>
    alert('LOGUEADO CORRECTAMENTE');
    location.href = 'index.php';
</script>";


} else {
    echo "<script>
    alert('Error DATOS NO VALIDADOS');
    location.href = 'Login.html';
</script>";

}


?>