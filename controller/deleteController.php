<?php
session_start();

require '../src/db.php';
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {


    $id = $_GET['id'];


    $conexion = connectMysql($dsn, $dbuser, $dbpass);

    echo delete($conexion, 'tasks', $id);
}

header("Location: ../src/template/dashboard.tpl.php?uname=" . $_SESSION['uname']);
