<?php

include'conn.php';
//$con=conectar();

$id_produ=$_POST['id_produ'];
echo $id_produ;

$tipo_produ = $_POST ['tipo_produ'];
$marca = $_POST ['marca'];
$name_produ = $_POST ['name'];
$img_produ = $_POST ['imagen'];
$precio = $_POST ['precio'];

$sql="UPDATE producto SET  tipo_produ='$tipo_produ',marca='$marca', name_produ='$name_produ',img_produ='$img_produ',precio='$precio' WHERE id_produ='$id_produ'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: tablaAdmin.php");
    }
?>