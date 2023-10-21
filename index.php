<?php
    session_start();
    if(isset($_SESSION["correoUsuario"])){
        $correoUsuario= $_SESSION["correoUsuario"];
        $tipoUsuario= $_SESSION["tipoUsuario"];
    }
    else{
        $correoUsuario= '';
        $tipoUsuario= '';
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi portafolio</title>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="container-fluid">
    <header>
        <!--Menu-->
        <nav  class="navbar navbar-expand-lg navbar-dark" id="navbar">
            <div class="contenedor">
                <img src="img/logo.png" alt="Logo" class="logotipo"/>
                <ul class="textoBoton" >
                    <li class="nav-item"><a href="index.php" class="Seleccionado">Inicio</a></li>
                    <li><a class="nav-link active" href="nosotros.php">¿Quienes somos?</a></li>
                    <li><a class="nav-link active" href="/Administracion/productos.php" class="Seleccionado">Productos</a></li>
                    <li><a class="nav-link active" href="contacto.php">Contactos</a></li>
                    <li class="nav-item">
                    <label class="switch">
                        <input type="checkbox" onclick="toggleDarkMode()">
                        <span class="slider"></span>
                    </label>
                    </li>
                </ul>          
            </div>
        </nav> 
       <div id="mostrarSlider"></div>
   </header>
  
   <section id="Portafolio">
       <div class="Contenedor">
           <div class="portafolio-nav">
               <ul class="textoBoton">
                    <li><a href="">Web</a></li>
                    <li><a href="">Móvil</a></li>
                    <li><a href="">Escritorio</a></li>
               </ul>
           </div>
       </div>
       <div class="Portafolio-content">
            <div class="Caja">
                <a href="http://">
                    <img src="img/web.png" alt="web">
                    <p>Sitio punto de venta</p>
                </a>               
            </div>
           
       </div>
   </section>
  
  <footer>
      <p>universidad</p>
  </footer>
    </form>
</body>
</html>