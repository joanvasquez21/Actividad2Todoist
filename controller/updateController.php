<?php
session_start();

require '../src/render.php';

$id = $_GET['id'];
$title = $_GET['title'];
$description = $_GET['description'];
$_SESSION['idTask'] = $id;

header("Location: ../src/template/update.tpl.php?id=" . $id . "&title=" . $title . "&description=" . $description);
