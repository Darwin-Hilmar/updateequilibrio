<?php

namespace Model;

class Admin extends ActiveRecord{
    // Base de datos
    protected static $tabla = 'usuario';
    protected static $columnasDB = ['id', 'email', 'password'];

    public $id;
    public $email;
    public $password;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
    }

    public function validar(){
        if(!$this->email){
            self::$errores[] = 'El email es obligatorio'; 
        }
        if(!$this->password){
            self::$errores[] = 'La password es obligatorio'; 
        }

        return self::$errores;
    }

    public function existeUsuario(){
        $query = " SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "' LIMIT 1";
        $resultado = self::$db->query($query);

        if(!$resultado -> num_rows){
            self::$errores[] = 'El usuario no existe';
            return;
        }
        return $resultado;
    }

    public function creaUsuario(){
        $email = "correo@correo.com";
        $password = "123456";

        $passwordHash = password_hash($password, PASSWORD_BCRYPT);


        $query = "INSERT INTO usuario (email, password) values('${email}', '${passwordHash}')";
        $resultado = self::$db->query($query);

        return $resultado;
    }

    public function comprobarPassword($resultado){
        $usuario = $resultado->fetch_object();

        $autenticado = password_verify($this->password, $usuario->password);

        if(!$autenticado){
            self::$errores[] = 'El password es incorrecto';
            return;
        }
        return $autenticado;
    }

    public function autenticar(){
        session_start();

        $_SESSION['usuario'] = $this->email;
        $_SESSION['login'] = true;

        header('Location: /tareas');
    }

}