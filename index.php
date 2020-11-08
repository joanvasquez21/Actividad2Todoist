<?php
//activacio de errores
ini_set('display_errors', 'On');

//configuracion del entorno
session_start();

$_SESSION['uname'] = "";

define('APP', __DIR__);

//cargamos el gestor de rutas
require APP . '/src/route.php';

//sistema de enrutamiento query_string marca la posicion  ? http://app?url=login
$controller = getRoute();
//redigir a ruta capturada

require APP . '/controller/' . $controller . '.php';

//header('Location: /controller/home.php');
