<?php
    if($peticionAjax){
        require_once"../model/userModel.php";
    }else{
        require_once"./model/userModel.php";
    }

    class userControlador extends userModel{
        /*------------controlador agregar usuario----------- */
        public function agregar_usuario_controlador(){

        }
    }