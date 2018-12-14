<?php

    require_once 'config/global.php';

if(isset($_GET["controller"])){

    $controllerObj=cargarControlador($_GET["controller"]);

    lanzarAccion($controllerObj);
}else{

    $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);

    lanzarAccion($controllerObj);
}

function cargarControlador($controller){

    try {
        $strFileController = 'controller/' . $controller . "Controller.php";
        if (! @include_once $strFileController){
            throw new Exception('Error');
        }
        else{
            require_once $strFileController;
        }
        $controllerObj = new EmpleadosController();

        return $controllerObj;
    }
    catch (Exception $e){
        header('Location: index.php');
    }

    return null;
}

function lanzarAccion($controllerObj){
    if(isset($_GET["action"])){
        $controllerObj->run($_GET["action"]);
    }
    else{
        $controllerObj->run(ACCION_DEFECTO);
    }
}

?>