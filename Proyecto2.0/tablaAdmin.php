<?php

include 'conn.php';
//$con = conectar();

$sql = "SELECT * FROM producto";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <link rel="stylesheet" href="css/tabla.css">

</head>

<body>
    <div>
        <div class="container-panel">

    <div class="login-box">
        <img class="avatar" src="img/taco.png" alt="Logo taco">
        <h1>Add Product</h1>

        <form action="insertar.php" method="post">

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
            <a href="index.php">Regresar</a>
        </form>
    </div>
    

            <div class="container-tabla">

                <table class="tablaClass">
                    <thead class="theadClass">
                        <tr>
                            <h1>Productos Registrados</h1>
                            <th>id_produ</th>
                            <th>tipo_produ</th>
                            <th>marca</th>
                            <th>name_produ</th>
                            <th>imagen_produ</th>
                            <th>precio</th>
                            <th></th>
                            <th></th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['id_produ'] ?></th>
                                <th><?php echo $row['tipo_produ'] ?></th>
                                <th><?php echo $row['marca'] ?></th>
                                <th><?php echo $row['name_produ'] ?></th>
                                <th><?php echo $row['img_produ'] ?></th>
                                <th><?php echo $row['precio'] ?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['id_produ'] ?>">
                                        <button>Editar</button>
                                    </a></th>
                                <th><a href="delete.php?id=<?php echo $row['id_produ'] ?>">
                                        <button>Eliminar</button>
                                    </a></th>
                            </tr>
                        <?php
                        }
                        ?>


                    </tbody>
                </table>

            </div>

        </div>

    </div>
    <div>


</body>

</html>