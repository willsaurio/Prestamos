<?php
class vistaModel{

    /*-------Modelo para obtener vistas-------*/
    protected static function obtener_vistas_model($vistas){
        $listablanca = [];
        if(in_array($vistas, $listablanca )){
            if(is_file("./views/contenidos/".$vistas."-view.php")){
                $contenido = "./views/contenidos/" . $vistas . "-view.php";
            }else{
                $contenido = "404";
            }
        }elseif($vistas=="login" || $vistas=="index"){
            $contenido = "login";
        }else{
            $contenido = "404";
        }
        return $contenido;
    }
}