<?php
require_once __DIR__."/../../../models/obtenerdatos.php";
$mvcDatos=new GetDatos();

$momento=date("d/m/Y h:i:s: A");
if (isset($_POST["usr"]) && isset($_POST["pass"])) {

    $result=$mvcDatos->selectQuery("SELECT * FROM usuarios WHERE usuario='".$_POST["usr"]."' and password=md5('".$_POST["pass"]."') and estado=1");
    if(count($result)>0)
    {
        if(!isset($_SESSION)){
            session_start();
        }
        $tipouser='';

        $_SESSION["id_usuario"]=$result[0]["id_usuario"];
        $_SESSION["tipo"]=$result[0]["tipo"];
        $_SESSION["usuario"]=$result[0]["usuario"];
        $_SESSION["foto"]=$result[0]["foto"];
        $_SESSION["nombre"]=$result[0]["nombre1"]." ".$result[0][apellido1];

        if($result[0]["tipo"]==1)
        {
            $tipouser="Administrador";
        }
        else
        {
            $tipouser="Usuario";
        }
        if($result[0]["tipo"]==1 or $result[0]["tipo"]==2)
        {
            $info=array('success'=>true,'msg'=>"Usuario Correcto",'link'=>controlador::$rutaAPP."index.php?action=home");
            $result=$mvcDatos->update_query("update usuarios set intentos=0 where usuario='".$_POST["usr"]."'");
        }
    }else
    {
        $consultar=$mvcDatos->selectQuery("select intentos from usuarios where usuario='".$_POST["usr"]."'");

        if(count($consultar)>0)
        {

            foreach($consultar as $key => $value) {
                $intentos=$value["intentos"];
            }

            if($intentos==0)
            {
                $result=$mvcDatos->update_query("update usuarios set intentos=1 where usuario='".$_POST["usr"]."'");
                $info=array('success'=>false,'msg'=>"CONTRASEÑA INCORRECTA(INTENTOS DISPONIBLES:".(4).")");
            }elseif ($intentos==1) {
                $result=$mvcDatos->update_query("update usuarios set intentos=2 where usuario='".$_POST["usr"]."'");
                $info=array('success'=>false,'msg'=>"CONTRASEÑA INCORRECTA(INTENTOS DISPONIBLES:".(3).")");
            }elseif ($intentos==2) {
                $result=$mvcDatos->update_query("update usuarios set intentos=3 where usuario='".$_POST["usr"]."'");
                $info=array('success'=>false,'msg'=>"CONTRASEÑA INCORRECTA(INTENTOS DISPONIBLES:".(2).")");
            }elseif ($intentos==3) {
                $result=$mvcDatos->update_query("update usuarios set intentos=4 where usuario='".$_POST["usr"]."'");
                $info=array('success'=>false,'msg'=>"CONTRASEÑA INCORRECTA(INTENTOS DISPONIBLES:".(1).")");
            }elseif ($intentos==4) {
                $result=$mvcDatos->update_query("update usuarios set intentos=5 where usuario='".$_POST["usr"]."'");
                $info=array('success'=>false,'msg'=>"CONTRASEÑA INCORRECTA(INTENTOS DISPONIBLES:".(0).")");
            }elseif ($intentos==5) {
                $result=$mvcDatos->update_query("update usuarios set estado=5 where usuario='".$_POST["usr"]."'");
                $info=array('success'=>false,'msg'=>"USUARIO'".($_POST["usr"])."'BLOQUEADO, CONTACTE CON EL ADMINISTRADOR.");
        }
    }else
    {
        $info=array('success'=>false,'msg'=>"USUARIO DESCONOCIDO");
    }

    
}
} else{
    $info=array('success'=>false,'msg'=>"No hay datos para comparar");
}
echo json_encode($info);