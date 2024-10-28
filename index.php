<?php

    require_once "./config/App.php";
    require_once "./controller/vistasControlador.php";

$plantilla = new vistasController();
$plantilla->obtener_plantilla_controlador();