<?php
use function CommonMark\Render\HTML;

session_start();

include("conn.php");


$car = array(
    'productos' => array(),
    'subtotal' => 0,
    'total' =>0
);

if(isset($_SESSION["carrito"])){
    $car = $_SESSION["carrito"];
}
$carritoGuardados = [];
if(isset($_SESSION["carritos"])){
    $carritoGuardados = $_SESSION["carritos"];
}

calcular($car, $carritoGuardados);

if(isset($_GET["carrito"])){

    //print $_SESSION["carrito"]['total'];
    $id_produ = $_GET["carrito"];
    if($id_produ){
        add($id_produ, $car, $con, $carritoGuardados);
    }
}

if(isset($_GET["remove"])){

    $id_produ = $_GET["remove"];
    if(isset($id_produ) || $id_produ == 0){
        remove($id_produ, $car, $carritoGuardados);
    }
}

function add($p = [], &$car, &$con, &$carritoGuardados){

    $sql = mysqli_query($con, "SELECT * FROM producto WHERE id_produ = '$p' ");
    $resul = mysqli_fetch_array($sql);
    // $resul['cantidad'] =1;
    array_push($car['productos'], $resul);
    $_SESSION["carrito"]= $car;
    calcular($car, $carritoGuardados);
}

function calcular(&$car, &$carritoGuardados){
    $car['subtotal'] = 0;
    $car['total'] = 0;
    $car['index'] = 0;

    foreach($car['productos'] as &$p){
        $car['subtotal'] += $p['precio'];
    }
    $car['total'] = $car['subtotal'];
    $_SESSION["carrito"] = $car;

    $carritoGuardados[$car['index']] = $car;
    $_SESSION["carritos"] = $carritoGuardados;
}

function remove($index = 0, &$car, &$carritoGuardados){
    array_splice($car['productos'], $index, 1);
    calcular($car, $carritoGuardados);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="css/carrito.css">
</head>
<body>
    <h1 class="title">Carrito total: $<?php echo $car['total'] ?></h1>

    

    <div class="container">
        <?php
        $arrayProductos = $con->query("SELECT * FROM producto");
        $row = $arrayProductos->fetch_array();
            foreach($car['productos'] as $key => &$row){

        ?>
            
            <div class="card">
                
                <img src="<?php echo $row['img_produ'] ?>">
                <p><?php echo $row['marca'] ?> </p>
                <p><?php echo $row['name_produ'] ?> </p>
                <p>$<?php echo $row['precio'] ?> </p>
                
                <form action="carrito.php" method="get">
                <button type="submit" name="remove" value="<?php echo $key ?>">Eliminar</button>
                </form>
            </div>    
                <?php
            }
                ?>
                <div>
        </div>
    </div>

    <form action="VistaProdu.php" methot="get"> 
        <button type="submit" name="p" value="p">Seguir comprando</button>
    </form>
    <div>
    <form action="compra.php">
        <button type="submit">Comprar</button>
    </form>
    </div>
</body>
</html>