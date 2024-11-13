<?php
    $peticionAjax=true;
    require_once "../config/App.php";

    if(isset($_POST['usuario_dni_reg'])){ 
        /*---------- Instancias al controlador ---------- */
        require_once "../controller/userContolador.php";
        $ins_usuario = new userControlador();


        /*-------- Agregar un usuario ----------*/
        if(isset($_POST['usuario_dni_reg']) && isset($_POST['usuario_nombre_reg'])){
        echo $ins_usuario->agregar_usuario_controlador();
        }
        
    }else{
       session_start(['name'=>'SPM']);
       session_unset();
       session_destroy();
       header("Location: ".SERVERURL. "login/");
       exit();
    }