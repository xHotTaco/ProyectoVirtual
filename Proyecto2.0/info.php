<?php
    session_start();
    include('conn.php');

    if(isset($_SESSION['correo'])){
        $sesion = true;

        $identificador = $_SESSION['correo'];
        $buscarUsuario = $con->query("SELECT * FROM usuarios WHERE correo='$identificador'");

        $row = $buscarUsuario->fetch_array();

        $nombre = $row['nombre'];
        $tipe = $row['tipo'];

    }

    else {
        $sesion = false;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand HotTaco</title>
    <link rel="stylesheet" href="css/info.css">
    <link rel="shortcut icon" href="img/taco.png" type="image/x-icon">
</head>
<body>
    <header>
        
       <nav>
        <a href="index.php">Inicio</a>
        <?php
                if ($sesion)
                    echo ' <a href="salirxD.php">Salir</a>';
                    
                    else
                    echo '  <a href="Registro.html">Registrarse</a> 
                            <a href="Login.html">Login</a>';
                    if (isset($tipe)){
                        if ($tipe ==1)
                        echo '  <a href="tablaAdmin.php">Admin</a>';
                    }                  

            ?>
        <a href="vistaProdu.php">Productos</a>
        <a href="carrito.php">Carrito</a>
        
       </nav>
       <section class="textos-header">
       <h1>Brand HotTaco</h1>
        
        <h2>Quienes somos?</h2>
       </section>
       <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
        <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Nosotros</h2>
            <div class="contenedor-sobre-nosotros">
                <!--<img src="img/img3.jpg" alt="" class="imagen-about-us">-->
                <div class="contenido-textos">
                    <h3><span>1</span>El Marketplace de la cultura actual</h3>
                    <p>Nuestra misión es dar acceso a los productos más codiciados del mundo de la manera mas inteligente posible. Compra los sneakers más hot, ropa y accesorios</p>
                    <h3><span>2</span>Precios transparentes</h3>
                    <p>Nuestro marketplace en tiempo real funciona justo como el mercado de valores, dándote acceso a comprar los productos más codiciados a su mejor valor del mercado.</p>           
                    <h3><span>3</span>Seguro</h3>
                    <p>Preservar la integridad de nuestro marketplace significa estar un paso adelante. Nuestros sistemas anti fraude y de seguridad, apoyados por nuestros socios de clase mundial, cuidan de tu información 24/7.</p>           
                    <h3><span>4</span>Verificado</h3>
                    <p>Todos los artículos vendidos desde nuestra plataforma, pasan por nuestro proceso de verificación que consiste de múltiples pasos y es ejecutado por nuestro equipo de autenticadores expertos</p>
                </div>
            </div>
        </section>
        
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Phone</h4>
                <p>3334509012</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>a21110130@ceti.mx</p>
            </div>
            <div class="content-foo">
                <h4>Location</h4>
                <a href="https://goo.gl/maps/aoaoxY2pvNdL2L5TA"><p>Av.Nueva Escocia</p></a>
            </div>
        </div>
        <h2 class="titulo-final">&copy; HotTaco | Carlos Lopez</h2>
    </footer>
</body>
</html>