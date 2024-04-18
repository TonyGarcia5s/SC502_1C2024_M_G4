<?php
class PrincipalModel extends Query {

public function __construct() {
    parent::__construct();
}

public function getPrueba() {
    return ''; // Método sin uso real por el momento
}

// Obtener todas las habitaciones
public function getHabitaciones() {
    try {
        $query = "SELECT * FROM habitaciones";
        $result = $this->selectAll($query);
        return $result;
    } catch (Exception $e) {
        // Manejo de errores: podrías registrar el error o lanzar una excepción
        error_log('Error al obtener las habitaciones: ' . $e->getMessage());
        return array(); // Devuelve un array vacío en caso de error
    }
}
}
