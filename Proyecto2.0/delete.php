<?php

include 'conn.php';
//$con=conectar();

$id_produ=$_GET['id'];

$sql="DELETE FROM producto  WHERE id_produ='$id_produ'";
$query=mysqli_query($con,$sql);

    if($query){
        echo "<script>
        alert('eliminado correctamente');
        location.href = 'tablaAdmin.php';
        </script>";
    }
?>