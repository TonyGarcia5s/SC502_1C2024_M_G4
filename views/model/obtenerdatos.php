<?php
include_once(__DIR__."/conexionBD.php");
include_once(__DIR__."db.class.php");

class GetDatos {
    private $conexion;

    public function __construct() {
        // Inicializar la conexión a la base de datos
        include_once(__DIR__."/conexionBD.php");
        $this->conexion = $dbh;
    }

    public function selectQuery($query, $params = array()) {
        $datos = array();

        try {
            $stmt = $this->conexion->prepare($query);
            $stmt->execute($params);

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $datos[] = $row;
            }
        } catch (PDOException $e) {
            // Manejar el error de manera adecuada, como loggearlo o lanzar una excepción
            echo "Error al ejecutar la consulta: " . $e->getMessage();
class GetDatos extends BaseDeDatos
{
    public function selectQuery($query, $params = array())
    {
        $datos = array();

        try {
            $stmt = $this->conexion->prepare($query);
            $stmt->execute($params);

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $datos[] = $row;
            }
        } catch (PDOException $e) {
            // Manejar el error de manera adecuada, como loggearlo o lanzar una excepción
            echo "Error al ejecutar la consulta: " . $e->getMessage();
        }


        return $datos;
    }

    public function insertQuery($query, $params = array()) {
        try {
            $stmt = $this->conexion->prepare($query);
            $stmt->execute($params);
            
            return true;
        } catch (PDOException $e) {
            // Manejar el error de manera adecuada, como loggearlo o lanzar una excepción
            echo "Error al ejecutar la consulta: " . $e->getMessage();
            return false;
        }
    public function insertQuery($query, $params = array())
    {
        try {
            $stmt = $this->conexion->prepare($query);
            $stmt->execute($params);
            
            return true;
        } catch (PDOException $e) {
            // Manejar el error de manera adecuada, como loggearlo o lanzar una excepción
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
            // Manejar el error de manera adecuada, como loggearlo o lanzar una excepción
            echo "Error al ejecutar la consulta: " . $e->getMessage();
            return false;
        }
    }
}
?>

    public function deleteQuery($query, $params = array())
    {
        try {
            $stmt = $this->conexion->prepare($query);
            $stmt->execute($params);
            
            return true;
        } catch (PDOException $e) {
            // Manejar el error de manera adecuada, como loggearlo o lanzar una excepción
            echo "Error al ejecutar la consulta: " . $e->getMessage();
            return false;
        }
    }
}
?>
