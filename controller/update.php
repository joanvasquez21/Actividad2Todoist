<?php
session_start();

require '../src/db.php';
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $title = $_POST['NoteTitle'];
    $description = $_POST['Description'];
    $idtask = $_SESSION['idTask'];

    //echo $idtask;

    $conexion = connectMysql($dsn, $dbuser, $dbpass);

    update($conexion, 'tasks', $idtask, $title, $description);
}

header("Location: ../src/template/dashboard.tpl.php?uname=" . $_SESSION['uname']);
