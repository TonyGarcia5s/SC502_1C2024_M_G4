<?php
require_once __DIR__.'/../model/obtenerdatos.php';
class controlador{
    public static $rutaAPP="/htdocs/SC502_1C2024_M_G4";
    public function iniciar_sesion(){
        if(!isset($_SESSION)) {
            session_start();
        }
        if(!isset($_SESSION["id_usuario"])) {
            return true;
        }
        return false;
    }

    //Usuarios
    public function home(){
        include_once(__DIR__."/../views\login\login.html");
    }

    //Inicio de sesion
    public function login(){
        include_once(__DIR__."/../views\login\login.html");
    }
    public function validar(){
        include_once(__DIR__."/../views\login\php\validarlogin.php");
    }
    //Fin Inicio de Sesion

    //Funcion al cerrar sesion
    function cerrar_sesion()
    {
        if(!isset($_SESSION)) {
            session_start();
        }
        session_destroy();
        header('Location: '.controlador::$rutaAPP.'index.php/login');
    }
    public function index(){
        include_once(__DIR__."/..views/login/login.html");
    }
}
