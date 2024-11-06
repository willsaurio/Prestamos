<?php
    $peticionAjax=true;
    require_once "../config/App.php";

    if(){ 
        /*---------- Instancias al controlador ---------- */
        require_once "../controller/userContolador.php";
        $ins_usuario = new userControlador();
    }else{
       session_start(['name'=>'SPM']);
       session_unset();
       session_destroy();
       header("Location: ".SERVERURL. "login/");
       exit();
    }