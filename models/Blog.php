<?php

namespace Model;

class Blog extends ActiveRecord{
    protected static $tabla = 'blog';
    protected static $columnasDB = ['id', 'titulo', 'tema', 'imagen', 'descripcion', 'creado', 'estado', 'autor'];

    public $id;
    public $titulo;
    public $tema;
    public $imagen;
    public $descripcion;
    public $creado;
    public $estado;
    public $autor;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->tema = $args['tema'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->creado= date('Y/m/d');
        $this->estado = $args['estado'] ?? '1';
        $this->autor = $args['autor'] ?? '';
    }
    
    public function validar(){
        if(!$this->titulo){
            self::$errores[] = 'Debes añadir un título'; 
        }
        if(!$this->tema){
            self::$errores[] = 'Debes añadir una pequeña descipción'; 
        }
        if(!$this->autor){
            self::$errores[] = 'Debes añadir un autor'; 
        }
        if(strlen($this->descripcion) < 20){
            self::$errores[] = 'La descripcion es obligatoria y debe tener al menos 20 caracteres'; 
        }
        if(!$this->imagen){
            self::$errores[] = 'La imagen es obligatoria'; 
        }

        return self::$errores;
    }
}