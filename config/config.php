<?php
// Configuración general
define('SITE_URL', 'http://localhost/ecommerce');
define('SITE_NAME', 'Mi Tienda Online');

// Rutas de directorios
define('ROOT_PATH', dirname(dirname(__FILE__)));
define('ASSETS_URL', SITE_URL . '/assets');
define('UPLOADS_PATH', ROOT_PATH . '/assets/uploads');

// Configuración de sesión
session_start();

// Zona horaria
date_default_timezone_set('America/Bogota');

// Configuración de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Funciones globales
function redirect($url) {
    header("Location: " . SITE_URL . $url);
    exit();
}

function sanitize($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// Incluir archivos necesarios
require_once ROOT_PATH . '/config/database.php';
require_once ROOT_PATH . '/includes/functions.php'; 