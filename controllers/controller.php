<?php
include_once(__DIR__."/../controllers/conexionBD.php");
include_once(__DIR__."/../models/obtenerdatos.php");

// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    // Consultar la base de datos para verificar el usuario y la contraseña
    $query = "SELECT * FROM usuario WHERE username = :username";
    $params = array(':username' => $usuario);
    
    try {
        $stmt = $dbh->prepare($query);
        $stmt->execute($params);
        $usuarioExistente = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuarioExistente) {
            // Obtener el hash de la contraseña almacenada en la base de datos
            $hashAlmacenado = $usuarioExistente['password'];
            
            // Obtener el hash de la contraseña proporcionada
            $hashProporcionado = password_hash($contraseña, PASSWORD_DEFAULT);
            
            // Imprimir los hashes para verificar
            echo "Hash almacenado: " . $hashAlmacenado . "<br>";
            echo "Hash proporcionado: " . $hashProporcionado . "<br>";
            
            // Verificar si el hash proporcionado coincide con el hash almacenado
            if (password_verify($contraseña, $hashAlmacenado)) {
                // Usuario autenticado correctamente
                // Puedes redirigirlo a otra página o establecer una sesión, por ejemplo:
                session_start();
                $_SESSION["usuario"] = $usuarioExistente;
                header("Location: ../views/index.php"); // Redirigir a la página de bienvenida
                exit();
            } else {
                // Usuario o contraseña incorrectos
                echo "Usuario o contraseña incorrectos";
            }
        } else {
            // El usuario no existe
            echo "El usuario no existe";
        }
    } catch (PDOException $e) {
        // Manejar el error de manera adecuada, como loggearlo o lanzar una excepción
        echo "Error al ejecutar la consulta: " . $e->getMessage();
    }
}

// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];

    // Aplicar hashing a la contraseña
    $hashContraseña = password_hash($contraseña, PASSWORD_DEFAULT);

    // Consultar la base de datos para verificar si el usuario ya existe
    $query = "SELECT * FROM usuario WHERE username = :username";
    $params = array(':username' => $usuario);
    
    try {
        $stmt = $dbh->prepare($query);
        $stmt->execute($params);
        $usuarioExistente = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuarioExistente) {
            // Usuario ya existe, mostrar un mensaje de error
            echo "El usuario ya existe";
        } else {
            // Insertar el nuevo usuario en la base de datos
            $insertQuery = "INSERT INTO usuario (username, password, nombre, apellidos, correo, telefono) VALUES (:username, :password, :nombre, :apellidos, :correo, :telefono)";
            $insertParams = array(
                ':username' => $usuario,
                ':password' => $hashContraseña,
                ':nombre' => $nombre,
                ':apellidos' => $apellidos,
                ':correo' => $correo,
                ':telefono' => $telefono
            );

            $stmt = $dbh->prepare($insertQuery);
            $stmt->execute($insertParams);

            // Redirigir al usuario a la página de inicio de sesión
            header("Location: ../views/login.html");
            exit();
        }
    } catch (PDOException $e) {
        // Manejar el error de manera adecuada, como loggearlo o lanzar una excepción
        echo "Error al ejecutar la consulta: " . $e->getMessage();
    }
}
?>
