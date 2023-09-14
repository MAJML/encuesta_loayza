<?php

class DataController{

    static public function ConsultaTaller()
    {
        $respuesta = DataTallerModel::ConsultaRegistrados();
        return $respuesta;
    }
}