<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WazyBambu | Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body style="background-color:rgb(218, 234, 188);">
    <nav class="navbar navbar-expand navbar-light" style="background-color:rgb(218, 234, 188);">
        <div class="nav navbar-nav" style="background-color:rgb(218, 234, 188);">
            <a class="nav-item nav-link active">
                <h5>Página Administrador</h5>
            </a>
            <a class="nav-item nav-link active" href="?controlador=paginas&accion=inicio" style="background-color:rgb(218, 234, 188);">Principal</a>
            <a class="nav-item nav-link" href="?controlador=usuarios&accion=inicio">Lista de usuarios</a>
            <a class="nav-item nav-link" href="vista\paginas\login.html">Cerrar sesión</a>
        </div>
    </nav><br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                include_once("ruteador.php");
                ?>
            </div>
        </div>
    </div>


    <!--Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>