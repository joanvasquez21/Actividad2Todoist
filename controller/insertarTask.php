<?php
session_start();

require '../src/db.php';
require '../config.php';
//saco los valores enviado desde el usuario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['NoteTitle'])) {
        $title = $_POST['NoteTitle'];
        $description = $_POST['Description'];
        $uname = $_SESSION['uname']; //agregamos el nombre y id porque necesitaremos al hacer
        //la insercion linea 23 por cada usuario en especifico
        $iduser = $_SESSION['id'];
    }

    //echo $iduser;

    $conexion = connectMysql($dsn, $dbuser, $dbpass); //cconecto a a la bd

    $datos = ["title" => $title, "description" => $description, "user" => $iduser]; //cargo los valore sque enviarmos a la funcion inser

    echo insert($conexion, 'tasks', $datos);
}

header("Location: ../src/template/dashboard.tpl.php?uname=" . $_SESSION['uname']);
