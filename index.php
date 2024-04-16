<?php
require_once 'config/config.php';
require_once 'helpers/funciones.php';

// CAPTURAR LA URL ACTUAL
$currentPageUrl = $_SERVER['REQUEST_URI'];
// VERIFICAR SI EXISTE LA RUTA ADMIN
$isAdmin = strpos($currentPageUrl, '/' . ADMIN) !== false;
// OBTENER PARÁMETRO DE LA URL AMIGABLE
$ruta = empty($_GET['url']) ? 'principal/index' : $_GET['url'];
// CREAR UN ARRAY A PARTIR DE LA RUTA
$array = explode('/', $ruta);
// DETERMINAR CONTROLADOR Y MÉTODO
if ($isAdmin && (count($array) == 1 
|| (count($array) == 2 && empty($array[1])))
 && $array[0] == ADMIN) {
    // Ruta para el panel de administración
    $controller = 'Admin';
    $metodo = 'login';
} else {
    // Ruta para el usuario normal
    $controller = ucfirst($array[0]);
    $metodo = isset($array[1]) ? $array[1] : 'index';
}

// LLAMAR AL AUTOCARGADOR (AUTOLOAD)
require_once 'config/app/Autoload.php';

// VALIDAR EL DIRECTORIO DEL CONTROLADOR
$dirControllers = ($isAdmin) ? 'controllers/' . $controller . '.php' : 'controller/' . $controller . '.php';

if (file_exists($dirControllers)) {
    require_once $dirControllers;

    // INSTANCIAR EL CONTROLADOR
    $controllerInstance = new $controller();

    // VERIFICAR SI EL MÉTODO EXISTE EN EL CONTROLADOR
    if (method_exists($controllerInstance, $metodo)) {
        // EJECUTAR EL MÉTODO CON PARÁMETROS SI LOS HAY
        $parametros = array_slice($array, 2); // Obtener los parámetros a partir del tercer elemento del array
        $controllerInstance->$metodo(...$parametros);
    } else {
        echo 'MÉTODO NO EXISTE';
    }
} else {
    echo 'CONTROLADOR NO EXISTE';
}
?>
