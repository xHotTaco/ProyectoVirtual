<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link rel="stylesheet" href="CSS/registroProdu.css">


</head>
<body>

<div class="login-box">
        <img class="avatar" src="img/taco.png" alt="Logo taco">
        <h1>Products</h1>

        <form action="producto.php" method="post">

            <!-- tipo -->
            <label for="Tipo">Product type</label>
            <input type="text" name="tipo_produ" id="tipo_produ" required="obligatorio" placeholder="Enter Product type">
            <!-- marca -->
            <label for="Marca">Brand</label>
            <input type="text" name="marca" id="marca" required="obligatorio" placeholder="Enter Brand">
            <!-- name -->
            <label for="name_produ">Name Product</label>
            <input type="text" name="name_produ" id="name_produ" required="obligatorio" placeholder="Enter Name">
            <!-- image -->
            <label for="Imagen">Image</label>
            <input type="text" name="imagen" id="imagen" required="obligatorio" placeholder="Enter Url">
            <!-- price -->
            <label for="Precio">Price</label>
            <input type="number" name="precio" id="precio" required="obligatorio" placeholder="Enter Price">
           
            <input type="submit" name="registrar" id="registrar">
            <a href="PanelAdmin.html">Regresar</a>
        </form>
    </div>
    
</body>
</html>