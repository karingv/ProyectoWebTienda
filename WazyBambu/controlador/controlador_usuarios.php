<?php
include_once("modelo/usuario.php");
include_once("conexion.php");


class ControladorUsuarios{
    public function inicio(){

        $usuarios=Usuario::consultar();

        include_once("vista/usuarios/inicio.php");

    }

    public function crear(){

        if($_POST){
            print_r($_POST);
            $nombre=$_POST['nombre'];
            $apellidos=$_POST['apellidos'];
            $email=$_POST['email'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $rol1=$_POST['rol1'];
            Usuario::crear($nombre, $apellidos, $email, $username, $password, $rol1);
            header("Location:admin.php?controlador=usuarios&accion=inicio");

        }
        include_once("vista/usuarios/crear.php");
    }

    public function editar(){

        

        if($_POST){
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $apellidos=$_POST['apellidos'];
            $email=$_POST['email'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $rol1=$_POST['rol1'];
            
            Usuario::editar($id,$nombre, $apellidos, $email, $username, $password, $rol1);
            header("Location:admin.php?controlador=usuarios&accion=inicio");
        }
        $id=$_GET['id'];
        $usuario=(Usuario::buscar($id));

        include_once("vista/usuarios/editar.php");

    }

    public function borrar(){
      print_r($_GET); 
      $id=$_GET['id'];
      Usuario::borrar($id);
      header("Location:admin.php?controlador=usuarios&accion=inicio");
           
    }

}


?>