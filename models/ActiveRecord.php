<?php

namespace Model;

class ActiveRecord{
      //Base de datos
      protected static $db;
      protected static $columnasDB = [];
      protected static $tabla = '';
      //Errores
      protected static $errores = [];
  
  
      // Definir la conexión a la base de datos
      public static function setDB($database){
          self::$db = $database;
      }
  
      public function guardar(){
          if(!is_null($this->id)){
              // Actualizar
              $this->actualizar();
          }else{
              // Crear nuevo registro
              $this->crear();
          }
      }
  
      public function crear(){
          //Sanitizar los datos
          $atributos = $this->sanitizarAtributos();
  
          // Insertar en la base de datos
          // $query = " INSERT INTO blog (titulo, imagen, descripcion, creado, estado, autor) VALUES ('$this->titulo', '$this->imagen', '$this->descripcion', '$this->creado', '$this->estado', '$this->autor') ";
          $query = " INSERT INTO " . static::$tabla . " ( ";
          $query .= join(', ', array_keys($atributos));
          $query .= " ) VALUES ( '";
          $query .= join("', '", array_values($atributos));
          $query .= "') ";


          $resultado = self::$db->query($query);
  
          if($resultado){
            if( static::$tabla === 'impactonacional' || static::$tabla === 'impactointernacional' ){
                header('Location: /impactos?resultado=1');
            }else if (static::$tabla === 'resena'){
                header('Location: /masnosotro?resultado=1');
            }
            else{
                header('Location: /' . static::$tabla . '?resultado=1');
            }
          }
      }
  
      public function actualizar(){
          //Sanitizar los datos
          $atributos = $this->sanitizarAtributos();
        
          $valores = [];
          foreach($atributos as $key => $value){
              $valores[] = "{$key}='{$value}'";
          }
          $query = " UPDATE " . static::$tabla . " SET ";
          $query .= join(', ', $valores);
          $query .= " WHERE id = '" . self::$db->escape_string($this->id) . "' ";
  
          $resultado = self::$db->query($query);
  
          if($resultado){
            if( static::$tabla === 'impactonacional' || static::$tabla === 'impactointernacional' ){
                header('Location: /impactos?resultado=2');
            }else if (static::$tabla === 'resena'){
                header('Location: /masnosotro?resultado=2');
            }else{
                header('Location: /' . static::$tabla . '?resultado=2');
            }
          }
      }
  
      // Identificar y unir los atributos de la BD
      public function atributos(){
          $atributos = [];
          foreach(static::$columnasDB as $columna){
              if($columna === 'id') continue;
              $atributos[$columna] = $this->$columna;
          }
          return $atributos;
      }
  
      // Ocultar un registro
      public function ocultar($valor){
          if($valor === 'Ocultar'){
              // Ocultar blog
              $query = "UPDATE " . static::$tabla . "  SET estado = '0' WHERE id = " . self::$db->escape_string($this->id);
              $resultado = self::$db->query($query);
  
              if($resultado){
                if( static::$tabla === 'impactonacional' || static::$tabla === 'impactointernacional' ){
                    header('Location: /impactos?resultado=3');
                }else if (static::$tabla === 'resena'){
                    header('Location: /masnosotro?resultado=3');
                }else{
                    header('Location: /' . static::$tabla . '?resultado=3');
                }
              }
          }else if($valor === 'Mostrar'){
              // Mostrar blog
              $query = "UPDATE " . static::$tabla . "  SET estado = '1' WHERE id = " . self::$db->escape_string($this->id);
              $resultado = self::$db->query($query);
  
              if($resultado){
                if( static::$tabla === 'impactonacional' || static::$tabla === 'impactointernacional' ){
                    header('Location: /impactos?resultado=4');
                }else if (static::$tabla === 'resena'){
                    header('Location: /masnosotro?resultado=4');
                }else{
                    header('Location: /' . static::$tabla . '?resultado=4');
                }
              }
          }
      }
  
      public function sanitizarAtributos(){
          $atributos = $this->atributos();
          $sanitizado = [];
  
          foreach($atributos as $key => $value){
              $sanitizado[$key] = self::$db->escape_string($value);
          }
          return $sanitizado;
      }
  
      public function setImagen($imagen){
          // Elimina la imagen Previa
          if(!is_null($this->id)){
              // Comprobar si existe el archivo
              $existeArchivo = file_exists(CARPETA_IMAGENES . $this->imagen);
              if($existeArchivo){
                  unlink(CARPETA_IMAGENES . $this->imagen);
              }
          }
  
          // Asignar al atributo de imagen el nombre de la imagen
          if($imagen){
              $this->imagen = $imagen;
          }
      }
      
      // Validación
      public static function getErrores(){
          return static::$errores;
      }
  
      public function validar(){
          static::$errores = [];
          return static::$errores;
      }
  
      // Lista todos los blogs
      public static function all(){
        
        if(static::$tabla === 'blog' ){
            $query = " SELECT * FROM " .   static::$tabla . " ORDER BY creado DESC ";
        }else{
          $query = " SELECT * FROM " . static::$tabla;
        }
  
          $resultado = self::consultarSQL($query);
  
          return $resultado;
      }
  
      // Lista todos los blogs
      public static function hidd(){

        if (static::$tabla === 'resena' || static::$tabla === 'informacion'){
            $query = " SELECT * FROM " . static::$tabla . " WHERE estado = '1' LIMIT 1";
        }else if(static::$tabla === 'blog' ){
            $query = " SELECT * FROM " .   static::$tabla . " ORDER BY creado DESC ";
        }else{
            $query = " SELECT * FROM " . static::$tabla . " WHERE estado = '1'";
        }
  
          $resultado = self::consultarSQL($query);
  
          return $resultado;
      }

      // Filtrado de alianzas
      public static function filt($id){
        
        $query = " SELECT * FROM " . static::$tabla . " WHERE sector_id = ${id} and estado = '1'";

        $resultado = self::consultarSQL($query);

        return $resultado;
    }
  
      // Buscar registro pos su Id
      public static function find($id){
          $query = "SELECT * FROM " . static::$tabla . " WHERE id = ${id}";
  
          $resultado = self::consultarSQL($query);
  
          return array_shift($resultado);
      }
  
      public static function consultarSQL($query){
          // Consultar la base de datos
          $resultado = self::$db->query($query);
  
          // Iterar los resultados
          $array = [];
          while($registro = $resultado->fetch_assoc()){
              $array[] = static::crearObjeto($registro);
          }
  
          // Liberar la memoria
          $resultado->free();
  
          // Retornar los resultados
          return $array;
      }
  
      protected static function crearObjeto($registro) {
          $objeto = new static;
          foreach($registro as $key => $value){
              if(property_exists($objeto, $key)){
                  $objeto->$key = $value;
              }
          }
          return $objeto;
      }
  
      // Sincroniza el objeto en memoria con los cambios realizados por el usuario
      public function sincronizar( $args = []){
          foreach($args as $key => $value){
              if(property_exists($this, $key) && !is_null($value)){
                  $this->$key = $value;
              }
          }
      }
}