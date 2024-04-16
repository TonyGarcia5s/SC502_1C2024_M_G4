<?php
include_once(__DIR__."/db.class.php");

class GetDatos extends BaseDeDatos
{
    public function selectQuery($query)
    {
        $datos=array();
         if(!$this->isConnected)
         {
            $this->conectar();
         }

        $consulta=$this->consultar($query);
        if($this->numero_filas($consulta))
        {
            while ($arreglo=$consulta->fetch_assoc()) {
                $datos[]=$arreglo;
            }
        }
        return $datos;
    }

    public function getLastInsert(){
        return $this->conexion->insert_id;
    }

    public function insert_query($query) {
        if(!$this->isConnected) {
            $this->conectar();
        }
        $consulta=$this->consultar($query);
        return true;
    }

    public function delete_query($query) {
        if (!$this->isConnected) {
            $this->conectar();
        }
        $consulta=$this->consultar($query);
        return true;
    }
}