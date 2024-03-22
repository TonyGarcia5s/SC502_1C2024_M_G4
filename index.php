<?php
require_once __DIR__."/views/controllers/controller.php";

$mvc= new controlador();

if($mvc->iniciar_sesion()){

    if(isset($_GET["action"]) && $_SESSION["tipo"]==1) //Privilegios adminis
    {
        switch ($_GET["action"]){
            //llamadas a paginas de informacion
            case 'home':
                $mvc->home();
            case 'cerrar':
                $mvc->cerrar_sesion();
                break;

            default:
            $mvc->home();
            break;
        }
    }

    elseif(isset($_GET["action"]) && $_SESSION["tipo"]==2) //privilegios
    {
        switch ($_GET["action"]) {

            //llamadas a paginas
            case 'home':
                $mvc->home();
            case 'cerrar':
                $mvc->cerrar_sesion();
                break;

            default:
            $mvc->home();
            break;
        }
    }
    else
    {
        $mvc->home();
    }

}else{
    if(!isset($_GET["action"])) {
        switch ($_GET["action"]) {

            //Acciones sin iniciar sesion
            case 'login':
                $mvc->login();
                break;

            case'validar':
                $mvc->validar();
                break;
            default:
            $mvc->index();
            break;
        }
    }else{
        $mvc->index();
    }
}