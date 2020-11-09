<?php

include 'header.tpl.php';

?>
<!--Este bashboard esde las cabeceras -->


<section class="container-fluid d-flex flex-row mt-5">
    <section class="col-3">
        <!-- Default form contact -->
        <form class="text-center border border-light p-5" method="POST" action="../../controller/insertarTask.php">

            <p class=" h4 mb-4">Agregar tarea</p>

            <!-- Name -->
            <input type="text" id="NoteTitle" name="NoteTitle" class="form-control mb-4" placeholder="Título">

            <!-- Message -->
            <div class="form-group">
                <textarea class="form-control rounded-0" id="Description" name="Description" rows="3" placeholder="Descripción"></textarea>
            </div>

            <!-- Send button -->
            <button class="btn btn-info btn-block" name="Guardar" type="submit">Guardar</button>

        </form>
        <!-- Default form contact -->
    </section>


    <section class="col-9">
        <table class="table">
            <thead class="unique-color white-text">
                <tr class="text-center">
                    <!-- <th scope="col">No</th> -->
                    <th scope="col">Título</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha y hora</th>
                    <th scope="col">Operación</th>
                </tr>
            </thead>
            <tbody>

                <?php include "dashboardTable.tpl.php"; ?> 
                <!--Aqui llamo a la tabla -->

            </tbody>
        </table>
    </section>
</section>




<?php
include 'footer.tpl.php';
?>