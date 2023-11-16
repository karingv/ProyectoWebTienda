<?php

class Usuario{
    public $id;
    public $nombre;
    public $apellidos;
    public $email;
    public $username;
    public $password;
    public $rol1;
    public function __construct($id,$nombre, $apellidos, $email, $username, $password, $rol1){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->email=$email;
        $this->username=$username;
        $this->password=$password;
        $this->rol=$rol1;

    }
    public static function consultar(){
        $listaUsuarios=[];
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->query("SELECT*FROM lista");

        foreach($sql->fetchAll() as $usuario){
            $listaUsuarios[]= new Usuario($usuario['id'],$usuario['nombre'],$usuario['apellidos'],$usuario['email'],$usuario['username'],$usuario['password'],$usuario['rol']);
        }
        return $listaUsuarios;
    }
  
 



    public static function crear($nombre, $apellidos, $email, $username, $password, $rol1){
        $conexionBD=BD::crearInstancia();

        $sql= $conexionBD->prepare("INSERT INTO lista(nombre, apellidos, email, username, password, rol) VALUES (?,?,?,?,?,?)");
        $sql->execute(array($nombre, $apellidos, $email, $username, $password, $rol1));
    
    }

    public static function borrar($id){
        $conexionBD=BD::crearInstancia();

        $sql= $conexionBD->prepare("DELETE FROM lista WHERE id=?");
        $sql->execute(array($id));
    
    }

    public static function buscar($id){
        $conexionBD=BD::crearInstancia();

        $sql= $conexionBD->prepare("SELECT * FROM lista WHERE id=?");
        $sql->execute(array($id));
        $usuario=$sql->fetch();
        return new Usuario($usuario['id'],$usuario['nombre'],$usuario['apellidos'],$usuario['email'],$usuario['username'],$usuario['password'],$usuario['rol']);

    }

    public static function editar($id,$nombre, $apellidos, $email, $username, $password, $rol1){
        $conexionBD=BD::crearInstancia();

        $sql= $conexionBD->prepare("UPDATE lista SET nombre=?, apellidos=?, email=?, username=?, password=?, rol=? WHERE id=? ");
        $sql->execute(array($nombre, $apellidos, $email, $username, $password, $rol1, $id));

    } 
}



?>