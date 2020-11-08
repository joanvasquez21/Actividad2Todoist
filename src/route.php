<?php
function getRoute(): string
{
    if (isset($_REQUEST['url'])) {
        $url = $_REQUEST['url'];
    } else {
        $url = 'home';
    }

    switch ($url) { //tres acciones dentro de un mismo controlador
        case 'login':  //reutilizar la vista del formulario
            return "login";
        case 'register':
            return "register";
        case 'dashboard':
            return "dashboard";
        case 'logaction': //gestionar los datos que nos llegan deesde el  formulario
            return "logaction";
        case 'logout': //cerrar la session del usuario
            return "logout";
        default:
            return 'home';
    }
}
//TEmplate plantilla vistas de la aplicacion html
//render pasara informacion a la plantilla
//route