<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="css/produ.css">

</head>


<body>
    <nav>
    <a href="index.php">Regresar</a>
    </nav>
    <h1 class="title">Productos</h1>

    <div class="container">
    <?php
        include("conn.php");
        $result = mysqli_query($con, "SELECT * FROM producto");

    while ($obj = mysqli_fetch_object($result)) {
    ?>
    <div class="card">
            <img src="<?php echo $obj->img_produ ?>" alt="" srcset="">
            <h4><?php echo $obj->tipo_produ ?></h4>
            <p><?php echo $obj->marca ?></p>
            <p><?php echo $obj->name_produ ?></p>
            <p>$<?php echo $obj->precio?></p>
            <form action="carrito.php" method="get">
    
        
            <button type="submit" name="carrito" value=" <?php echo $obj->id_produ; ?> ">Agregar</button>
        </div>
    </form>
    
    <?php
        }
    ?>

    </div>
    

</body>

</html>