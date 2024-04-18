<?php
// controllers/Principal.php

class PrincipalModel extends Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    // Obtener todas las habitaciones desde la base de datos
    public function getHabitaciones() {
        $query = "SELECT * FROM habitaciones";
        return $this->db->selectAll($query);
    }
}

?>