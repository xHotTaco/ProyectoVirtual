<?php 
    include 'conn.php';
    //$con=conectar();

$id_produ=$_GET['id'];

$sql="SELECT * FROM producto WHERE id_produ='$id_produ'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualizar</title>
        <link rel="stylesheet" href="css/actualizar.css">
        
    </head>
    <body>
    <div class="login-box">
        <img class="avatar" src="img/taco.png" alt="Logo taco">
        <h1>Update Product</h1>

        <form action="update.php" method="post">


            <input  type="hidden" name="id_produ" value="<?php echo $row['id_produ']  ?>">
            <!-- tipo -->
            <label for="Tipo">Product type</label>
            <input type="text" name="tipo_produ" id="tipo_produ" required="obligatorio" placeholder="Enter Product type">
            <!-- marca -->
            <label for="Marca">Brand</label>
            <input type="text" name="marca" id="marca" required="obligatorio" placeholder="Enter Brand">
            <!-- Nombre -->
            <label for="Name">Name product</label>
            <input type="text" name="name" id="name" required="obligatorio" placeholder="Enter Name">
            <!-- image -->
            <label for="Imagen">Image</label>
            <input type="text" name="imagen" id="imagen" required="obligatorio" placeholder="Enter Url">
            <!-- price -->
            <label for="Precio">Price</label>
            <input type="number" name="precio" id="precio" required="obligatorio" placeholder="Enter Price">
           
            <input type="submit" name="registrar" id="registrar">
            <a href="tablaAdmin.php">Regresar</a>
        </form>
    </div>
    </body>
</html>