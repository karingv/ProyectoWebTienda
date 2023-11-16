<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WazyBambu | Contacto</title>
        <!--Estilos-->
        <link rel="stylesheet" href="css/contacto.css">
        <link href = "https: //fonts.googleapis.com/css2? family = Raleway: wght @ 200 & display = swap "rel =" stylesheet ">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <!-- Referencia js -->
        <script src="js/Mensaje.js"></script>
    </head>
<body>
    <!--Menu de navegacion-->
    <header id="header">
        <nav class="menu">
            <div class="logobox">
              &nbsp;&nbsp;&nbsp;&nbsp;<img src="img/logopanda.png"  width="90" height="80">
              <span class="btn-menu"><i class="fas fa-bars"></i></span>
            </div>
            <div class="list-container">
                <ul class="lists">
                    <li><a href="inicio.html">Inicio</a></li>
                    <li><a href="nosotros.html">Nosotros</a></li>
                    <li><a href="equipo.html">Equipo</a></li>
                    <li><a href="" class="activo">Contacto</a></li>
                    <li><a href="tienda.html">Tienda</a></li>
                    <li><a href="login.html">Iniciar sesión</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!--Formulario-->
    <section class="container2">
        <div class="deg-container">
        <div class="ejeZcontainer">
            <div class="container-content">
                <div class="container-tittle">
                    <h2>Formulario de contacto</h2>
                    <hr>
                </div>

                <div class="formulario-content">
                    <form id="formulario">
                        <label for="user">Nombre: </label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre">
                        
                        <label for="email">Email: </label>
                        <input type="email" id="correo" name="correo" placeholder="Ingresa tu correo electrónico">
                        
                        <label for="text">Asunto: </label>
                        <input type="text" id="asunto" name="asunto" placeholder="Ingresa asunto">

                        <label for="asunto">Mensaje: </label>
                        <textarea name="mensaje" id="mensaje"></textarea>

                        <br><br>
                        <div class="send">
                            <button name='enviar'onclick="Enviar_correo()">Enviar</button>
                        </div>
                        <br><br>

                        <p>Escribenos un mensaje</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="skew-abajo"></div>
    </section>

    <!--Footer-->
    <br><br><br><br>
    <footer>
      <div class="partFooter">
          <div class="social-media">
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-youtube"></i>
          </div>
          <br><br>
          <h5>WazyBambu&copy;2021 - Desarrollado por el Grupo 07</h5>
      </div>
  </footer>

    <!--Scripts-->
<script src="js/app.js"></script>
<script src="https://kit.fontawesome.com/1a98240850.js" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>   
<script SameSite="None; Secure" src="https://static.landbot.io/landbot-3/landbot-3.0.0.js"></script>
<script>
  var myLandbot = new Landbot.Livechat({
    configUrl: 'https://chats.landbot.io/v3/H-1014200-SGM6Y4V67QUFSSHC/index.json',
  });
</script> 
<?php
include("correo.php");
?> 
</body>
</html>