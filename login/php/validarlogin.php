<?php
require_once "../models/obtenerdatos.php";
$mvcDatos = new GetDatos();

$momento = date("d/m/Y h:i:s: A");

if (isset($_POST["usr"]) && isset($_POST["pass"])) {

    $result=$mvcDatos->selectQuery("SELECT * FROM usuarios WHERE usuario='".$_POST["usr"]."' and password=md5('".$_POST["pass"]."') and estado=1");
    if(count($result)>0)
    {
        if(!isset($_SESSION)){
            session_start();
        }

        $_SESSION["id_usuario"] = $result[0]["id_usuario"];
        $_SESSION["tipo"] = $result[0]["tipo"];
        $_SESSION["usuario"] = $result[0]["usuario"];
        $_SESSION["foto"] = $result[0]["foto"];
        $_SESSION["nombre"] = $result[0]["nombre1"] . " " . $result[0]["apellido1"];

        if ($result[0]["tipo"] == 1) {
            $tipouser = "Administrador";
        } else {
            $tipouser = "Usuario";
        }
        
        if ($result[0]["tipo"] == 1 || $result[0]["tipo"] == 2) {
            $info = array('success' => true, 'msg' => "Inicio de sesión exitoso como $tipouser", 'link' => controlador::$rutaAPP."index.php?action=home");
            $result = $mvcDatos->update_query("UPDATE usuarios SET intentos=0 WHERE usuario=:usuario", array(':usuario' => $_POST["usr"]));
        }
    } else {
        $consultar = $mvcDatos->selectQuery("SELECT intentos FROM usuarios WHERE usuario=:usuario", array(':usuario' => $_POST["usr"]));

        if (count($consultar) > 0) {
            $intentos = $consultar[0]["intentos"];

            if ($intentos < 5) {
                $intentos_restantes = 5 - $intentos;
                $result = $mvcDatos->update_query("UPDATE usuarios SET intentos=:intentos WHERE usuario=:usuario", array(':intentos' => $intentos + 1, ':usuario' => $_POST["usr"]));
                $info = array('success' => false, 'msg' => "Contraseña incorrecta. Intentos restantes: $intentos_restantes");
            } else {
                $result = $mvcDatos->update_query("UPDATE usuarios SET estado=5 WHERE usuario=:usuario", array(':usuario' => $_POST["usr"]));
                $info = array('success' => false, 'msg' => "Usuario bloqueado. Por favor, contacte con el administrador.");
            }
        } else {
            $info = array('success' => false, 'msg' => "Usuario desconocido");
        }
    }
} else {
    $info = array('success' => false, 'msg' => "No hay datos para comparar");
}

echo json_encode($info);
?>
