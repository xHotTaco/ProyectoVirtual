<?php

$db_host="localhost";
$db_user="root";
$db_pasword="";
$db_name="brand_hottaco";


$con = mysqli_connect($db_host, $db_user, $db_pasword, $db_name);

/*function conectar(){
    $db_host="localhost";
    $db_user="root";
    $db_pasword="";
    $db_name="brand_hottaco";

    $con = mysqli_connect($db_host, $db_user, $db_pasword);

    if($con){
        echo "conexion exitosa";
    }else{
        echo "conexcion no exitosa";
    }

    mysqli_query($con,$db_name);
    return $con;
}*/
?>