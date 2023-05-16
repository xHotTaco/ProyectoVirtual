<?php

include 'conn.php';

$tipo_produ = $_POST ['tipo_produ'];
$marca = $_POST ['marca'];
$name_produ = $_POST ['name_produ'];
$img_produ = $_POST ['imagen'];
$precio = $_POST ['precio'];


$insert="INSERT INTO producto( id_produ, tipo_produ, marca, name_produ, img_produ, precio)
values('0', '$tipo_produ', '$marca', '$name_produ', '$img_produ', '$precio')";

$ir = mysqli_query($con, $insert);
if($ir){
    echo "<script>
    alert('Registro con exito');
    location.href = 'tablaAdmin.php';
</script>";
}else{
    echo "hay un error";
    }
?>