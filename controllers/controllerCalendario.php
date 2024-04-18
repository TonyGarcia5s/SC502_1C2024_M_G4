<?php
// Incluir los archivos necesarios
include_once(__DIR__."/../controllers/conexionBD.php");
include_once(__DIR__."/../models/obtenerdatos.php");

// Verificar si se ha enviado el formulario para agregar el evento
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre_evento = $_POST["eventName"];
    $descripcion = $_POST["eventDescription"];
    $fecha_inicio = $_POST["eventStartDate"];
    $fecha_fin = $_POST["eventEndDate"];

    // Validar los datos si es necesario

    // Instanciar la clase GetDatos con la conexión a la base de datos
    $getDatos = new GetDatos($dbh);

    // Consulta SQL para insertar el evento en la base de datos
    $query = "INSERT INTO granHotel.eventos (nombre_evento, descripcion, fecha_inicio, fecha_fin) VALUES (?, ?, ?, ?)";

    // Parámetros para la consulta preparada
    $params = array($nombre_evento, $descripcion, $fecha_inicio, $fecha_fin);

    // Ejecutar la consulta de inserción
    if ($getDatos->insertQuery($query, $params)) {
        // Si el evento se agregó correctamente, mostrar una alerta
        echo "<script>alert('Evento añadido correctamente'); window.location.href = '../views/calendario.php';</script>";
    } else {
        // Si hubo un error al agregar el evento, mostrar una alerta
        echo "<script>alert('Error al agregar el evento');</script>";
    }
}

// Consultar los eventos de la base de datos
$getDatos = new GetDatos($dbh);
$query = "SELECT nombre_evento AS title, fecha_inicio AS start, fecha_fin AS end FROM granHotel.eventos";
$result = $getDatos->selectQuery($query);

// Verificar si la consulta fue exitosa
if ($result) {
    // Preparar los datos para el calendario
    $eventos = $result;
} else {
    // Si hubo un error al obtener los eventos, mostrar un mensaje de error
    echo "<script>alert('Error al obtener los eventos');</script>";
    $eventos = array(); // Asignar un array vacío para evitar problemas de renderizado en el calendario
}

// Función para generar el HTML de los eventos del calendario
function generarEventosHTML($eventos) {
    $html = "";
    foreach ($eventos as $evento) {
        $html .= "<div>{$evento['title']} - Inicio: {$evento['start']} - Fin: {$evento['end']}</div>";
    }
    return $html;
}

// Generar el HTML de los eventos
$eventos_html = generarEventosHTML($eventos);

// Incluir el HTML del calendario
include_once(__DIR__."/../views/calendario.php");


?>
