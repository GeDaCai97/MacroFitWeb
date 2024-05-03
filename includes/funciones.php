<?php

define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');
define('CARPETA_IMAGENES', $_SERVER['DOCUMENT_ROOT'] . '/imagenes/');


function debuguear($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
// Escapa HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function validarRedireccionar(string $url) {
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header("Location: $url");
    }
    return $id;
}

function validarTipoContenido($tipo) {
    $tipos = ['dieta', 'alimento'];
    return in_array($tipo, $tipos);
}

//muestra las alertas
function mostrarNotificacion($codigo) {
    
    switch($codigo) { 
        case 1:
            $mensaje = 'Creado correctamente';
            break;
        case 2:
            $mensaje = 'Actualizado correctamente';
            break;
        case 3:
            $mensaje = 'Eliminado correctamente';
            break;
        default:
            $mensaje = false;
            break;
    }
    return $mensaje;
}