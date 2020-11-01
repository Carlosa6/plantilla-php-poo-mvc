<?php

if($peticionAjax){ //los archivos van a estar en la carpeta ajax
    require_once "../config/server.php";
}else{ //los archivos estarán en el config
    require_once "./config/server.php";
}

class mainModel{

    /** función para conectar a la BD */
    protected static function conectar(){
        $conexion = new PDO(SGBD,USER,PASS);
        $conexion->exec("SET CHARACTER SET utf8");
        return $conexion;
    }

    /** función para ejecutar consultas simples */
    protected static function ejecutar_consulta_simple($consulta){
        $sql=self::conectar()->prepare($consulta);
        $sql->execute();
        return $sql;
    }

}