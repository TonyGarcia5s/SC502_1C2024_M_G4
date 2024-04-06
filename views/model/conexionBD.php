<?php
$dsn = 'mysql:host=localhost;dbname=granhotel';
$username = 'usuario_proyecto';
$password = 'Usuar1o_Clave.';

try {
    $dbh = new PDO($dsn, $username, $password);
    // Configura el modo de error de PDO a excepción
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos";
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}
?>