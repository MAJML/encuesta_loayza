<?php

require_once "conexion.php";

class DataTallerModel{

    static public function ConsultaRegistrados(){
        $stmt = conexion::conectar()->prepare("SELECT * FROM taller_voley");
        $stmt -> execute();
        return $stmt -> fetchAll();
    }
}