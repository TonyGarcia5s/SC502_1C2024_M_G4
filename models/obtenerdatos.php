<?php
include_once(__DIR__."/../controllers/conexionBD.php");

class GetDatos {
    private $conexion;

    public function __construct($dbh) {
        $this->conexion = $dbh;
    }

    public function selectQuery($query, $params = array()) {
        try {
            $stmt = $this->conexion->prepare($query);
            $stmt->execute($params);
            
            // Retorna el objeto PDOStatement
            return $stmt;
        } catch (PDOException $e) {
            // Manejar el error de manera adecuada, como loggearlo o lanzar una excepción
            echo "Error al ejecutar la consulta: " . $e->getMessage();
            return false;
        }
    }

    public function insertQuery($query, $params = array()) {
        try {
            $stmt = $this->conexion->prepare($query);
            $stmt->execute($params);
            
            return true;
        } catch (PDOException $e) {
            echo "Error al ejecutar la consulta: " . $e->getMessage();
            return false;
        }
    }

    public function deleteQuery($query, $params = array()) {
        try {
            $stmt = $this->conexion->prepare($query);
            $stmt->execute($params);
            
            return true;
        } catch (PDOException $e) {
            echo "Error al ejecutar la consulta: " . $e->getMessage();
            return false;
        }
    }
}
?>
