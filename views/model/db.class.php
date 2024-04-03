<?php

class BaseDeDatos {
    protected $conexion;
    protected $isConnected = false;

    public function conectar() {
        $this->conexion = new mysqli("localhost", "root", "devoloping", "granhotel");

        if ($this->conexion->connect_error) {
            throw new Exception("Error de conexión: " . $this->conexion->connect_error);
        } else {
            $this->isConnected = true;
        }
    }

    public function consultar($sql) {
        if (!$this->isConnected) {
            throw new Exception("No se ha establecido una conexión a la base de datos");
        }

        $result = $this->conexion->query($sql);
        if ($result === false) {
            throw new Exception("Error en la consulta: " . $this->conexion->error);
        }
        return $result;
    }
    public function cerrar() {
        if ($this->isConnected) {
            $this->conexion->close();
            $this->isConnected = false;
        }
    }
}

?>