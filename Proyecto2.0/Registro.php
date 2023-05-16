<?php

include 'conn.php'; 


$nombre = $_POST ['nombre'];
$correo = $_POST ['correo'];
$contra = $_POST ['contra'];
$numero = $_POST ['numero'];


$insert="INSERT INTO usuarios( id, tipo, nombre, correo, contra, numero)
values('0', '0', '$nombre', '$correo', '$contra', '$numero')";

$ir = mysqli_query($con, $insert);
if($ir){
    echo "<script>
    alert('Registro con exito');
    location.href = 'index.php';
</script>";
}else{
    echo "hay un error";
    }

?>