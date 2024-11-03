<?php
    
    if($peticionAjax){
        require_once "../config/server.php";
    }else{
        require_once "./config/server.php";
    }

    class mainModel{
      
        /*----- Funcion para conectar a la BD ----- */
        protected static function conectar(){
            $conexion = new PDO(SGBD, USER, PASSWORD);
            $conexion->exec("SET CHARACTER SET utf8");
            return $conexion;
        }

        /*----- Funcion ejecutar consultas simples ----- */
        protected static function ejecutar_consulta_simple($consulta){
            $sql=self::conectar()->prepare($consulta);
            $sql->execute();
            return $sql;
        }

    }