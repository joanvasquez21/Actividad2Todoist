<?php
session_start();
require '../db.php';
require '../../config.php';

$conexion = connectMysql($dsn, $dbuser, $dbpass); //conectamos a la bd


$id = $_SESSION['id']; //obtenemos de la sesion cuando nos conectamos a la db

$array = selectAll($conexion, 'tasks', $id); //aqui hacemos la consulta  funcion de db 
//tasks tareas

foreach ($array as $index => $item) {
     ?>
    <tr>
        <td class='text-center'> <?php echo $item['title']; ?></td>
        <td class='text-center'> <?php echo $item['description']; ?></td>
        <td class='text-center'> <?php echo $item['due_date']; ?></td>
        <td class="text-center">
            <a href="../../controller/updateController.php?id=<?php echo $item['id']; ?>&title=<?php echo $item['title']; ?>&description=<?php echo $item['description']; ?>">
                <button type="button" class="btn success-color text-white">
                    <i class="far fa-edit"></i> Actualizar
                    <!--Cuando pongo actualizar llamo al controlador de update -->
                </button>
            </a>
            <a href="../../controller/deleteController.php?id=<?php echo $item['id']; ?>"> <button type="button" class="btn text-white danger-color">
                    <i class="far fa-trash-alt"></i> Eliminar
                </button>
            </a>
        </td>
    </tr>

<?php } ?>