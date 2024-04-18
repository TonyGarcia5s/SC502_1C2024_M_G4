<?php
// Incluir los archivos necesarios
include_once(__DIR__."/../controllers/conexionBD.php");
include_once(__DIR__."/../models/obtenerdatos.php");

// Consultar los eventos de la base de datos
$getDatos = new GetDatos($dbh);
$query = "SELECT nombre_evento AS title, fecha_inicio AS start, fecha_fin AS end FROM granHotel.eventos";
$result = $getDatos->selectQuery($query);

// Verificar si la consulta fue exitosa
if ($result) {
    // Preparar los datos para el calendario
    $eventos = $result->fetchAll(PDO::FETCH_ASSOC);

    // Devolver los eventos en formato JSON
    header('Content-Type: application/json');
    echo json_encode($eventos);
} else {
    // Si hubo un error al obtener los eventos, devolver un mensaje de error en JSON
    http_response_code(500);
    echo json_encode(array("message" => "Error al obtener los eventos"));
}
?>
