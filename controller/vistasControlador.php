<?php
    require_once "./model/vistasModel.php";

    class vistasController extends vistaModel {

        /*---- Controlador obtener plantilla ---- */
        public function obtener_plantilla_controlador(){
        return require_once "./views/plantilla.php";
        }

        /*---- Controlador obtener plantilla ---- */
        public function obtener_vista_controlador(){
            if (isset($_GET['views'])){
                $ruta = explode("/", $_GET['views']);
                $respuesta = vistaModel::obtener_vistas_model($ruta[0]);
            }else{
                $respuesta="login";
            }
            return $respuesta;
        }
    }
