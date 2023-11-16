<?php

$host = "localhost";
$user = "root";
$password = "";
$bd= "login";

$conn=mysqli_connect($host, $user, $password, $bd);

if(!$conn){
	die("No hay conexion :".mysqli_connect_error());
}

class BD{
    private static $instancia=NULL;
    public static function crearInstancia(){

        if(!isset( self::$instancia)){
            $opcionesPDO[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;

            self::$instancia= new PDO('mysql:host=localhost; dbname=login','root','', $opcionesPDO);

        }
        return self::$instancia;
    }
}



?>