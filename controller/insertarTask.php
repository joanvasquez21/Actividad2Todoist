<?php
session_start();

require '../src/db.php';
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['NoteTitle'])) {
        $title = $_POST['NoteTitle'];
        $description = $_POST['Description'];
        $uname = $_SESSION['uname'];
        $iduser = $_SESSION['id'];
    }

    //echo $iduser;

    $conexion = connectMysql($dsn, $dbuser, $dbpass);

    $datos = ["title" => $title, "description" => $description, "user" => $iduser];

    echo insert($conexion, 'tasks', $datos);
}

header("Location: ../src/template/dashboard.tpl.php?uname=" . $_SESSION['uname']);
