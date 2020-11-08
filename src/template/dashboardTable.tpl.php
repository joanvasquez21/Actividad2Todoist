<?php
session_start();
require '../db.php';
require '../../config.php';

$conexion = connectMysql($dsn, $dbuser, $dbpass);

$id = $_SESSION['id'];

$array = selectAll($conexion, 'tasks', $id);

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
                </button>
            </a>
            <a href="../../controller/deleteController.php?id=<?php echo $item['id']; ?>"> <button type="button" class="btn text-white danger-color">
                    <i class="far fa-trash-alt"></i> Eliminar
                </button>
            </a>
        </td>
    </tr>

<?php } ?>