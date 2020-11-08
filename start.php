<?php
//base de dato tambien lo tengo que llamar en index
//crea el esquema
include 'config.php';
require 'src/db.php';

$db =connectMysql($dsn,$dbuser,$dbpass);
$sql = file_get_contents('prouf1.sql'); //prouf1 la base de datos
try{
    $db->exec($sql);
}
catch(PDOException $e) //si salta alguna exepcion mostrario el mensaje de error
{
    die($e->getMessage()); //mostrara el mensaje de error
}
?>