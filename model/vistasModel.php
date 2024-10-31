<?php
class vistaModel{

    /*-------Modelo para obtener vistas-------*/
    protected static function obtener_vistas_model($vistas){
        $listablanca = ["home", "client-list", "client-new","client-seach","client-update","company","home","item-list","item-new","item-search","item-update","reservation-list",
        "reservation-new","reservation-pending","reservation-search","reservation-reservation","reservation-update","user-list","user-new","user-search","user-update"];
        if(in_array($vistas, $listablanca )){
            if(is_file("./views/contenidos/".$vistas."-views.php")){
                $contenido = "./views/contenidos/" . $vistas . "-views.php";
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