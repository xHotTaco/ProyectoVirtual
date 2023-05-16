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
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="img/taco.png" type="image/x-icon">
</head>
<body>
    <header>
        
       <nav>
        <a href="info.php">Informacion</a>
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
        <?php
            if($sesion==true){
                echo " <h2> &nbsp Bienvenido ".$nombre ."</h2>"; 
            }
            ?>
        <h1>Haz tus compras seguras</h1>
        <h2>Con una pagina de confianza</h2>
       </section>
       <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
        <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Nuestra calidad</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/img3.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Los mejores productos</h3>
                    <p>Siempre en busca de las mejores marcas y productos para nuestros compradores </p>
                    <h3><span>2</span>Al mejor precio</h3>
                    <p>Sin dejar aun lado más importante que es el precio, somos los mejores del mercado </p>             
                </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo"></h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="img/muestra1.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/iconoselec.png" alt="">
                            <a href="vistaProdu.php">Mas productos</a>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/muestra2.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/iconoselec.png" alt="">
                            <a href="vistaProdu.php">Mas productos</a>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/muestra3.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/iconoselec.png" alt="">
                            <a href="vistaProdu.php">Mas productos</a>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/muestra4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/iconoselec.png" alt="">
                            <a href="vistaProdu.php">Mas productos</a>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/muestra5.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/iconoselec.png" alt="">
                            <a href="vistaProdu.php">Mas productos</a>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/muestra6.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/iconoselec.png" alt="">
                            <a href="vistaProdu.php">Mas productos</a>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/muestra7.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/iconoselec.png" alt="">
                            <a href="vistaProdu.php">Mas productos</a>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/muestra8.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/iconoselec.png" alt="">
                            <a href="vistaProdu.php">Mas productos</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clientes contenedor">
            <h2 class="titulo">Que dicen nuestros clientes</h2>
            <div class="cards">
                <div class="card">
                    <img src="img/usr1.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Elon Musk</h4>
                        <p>La mejor pagina sin duda, eh pensado en comprar toda la pagina de lo tanto que me gusta</p>
                    </div>    
            </div>
            <div class="card">
                <img src="img/usr2.jpg" alt="">
                <div class="contenido-texto-card">
                    <h4>Cristiano Ronaldo</h4>
                    <p>Me encanta comprar aqui, siempre lo que pido me llega rapido y seguro</p>
                </div>
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
                <p>Av.Nueva Escocia</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; HotTaco | Carlos Lopez</h2>
    </footer>
</body>
</html>