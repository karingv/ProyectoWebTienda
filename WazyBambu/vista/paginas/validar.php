<?php

include("../../conexion.php");

$nom = $_POST["nombre"];
$ape     = $_POST["apellidos"];
$email    = $_POST["email"];
$user    = $_POST["username"];
$pass    = $_POST["password"];
$rol = "usuario";

$rol1 	= $_POST["rol1"];

//Login
if (isset($_POST["btningresar"])) {
    $queryingresar = mysqli_query($conn, "SELECT * FROM lista WHERE username = '$user'and password = '$pass' ");
    $row = mysqli_num_rows($queryingresar);

    if ($row == 1) {
        
            if($rol1=="usuario")
                {	
                    header("Location: inicio.html");
                }
            else if ($rol1=="administrador")
                {
                    header("Location: ../../admin.php");
                }

    } else {
        "<script> alert('Usuario no existe'); 
        window.location='login.html'</script>";
    }
}


//Registrar
if (isset($_POST["btnregistrar"])) {
    $sqlgrabar = "INSERT INTO lista (nombre, apellidos, email, username, password, rol) VALUES ('$nom','$ape','$email','$user','$pass','$rol')";

    if (mysqli_query($conn, $sqlgrabar)) {
        echo
        "<script> alert('Usuario registrado con exito'); 
        window.location='login.html'</script>";
    } else {
        echo "Error: ";
    }
}
