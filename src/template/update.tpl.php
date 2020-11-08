<?php

include 'header.tpl.php';

?>

<section class="container mt-5 col-3">
    <section>
        <!-- Default form contact -->
        <form class="text-center border border-light p-5" method="POST" action="../../controller/update.php">

              <p class=" h4 mb-4">Actualizar tarea</p>

             <!-- Name -->
            <input type="text" id="NoteTitle" name="NoteTitle" class="form-control mb-4" placeholder="Título" value="<?php echo $_GET['title']; ?>">

             <!-- Message -->
         <div class="form-group">
               <textarea class="form-control rounded-0" id="Description" name="Description" rows="3" placeholder="Descripción">
            <?php echo $_GET['description']; ?> 
                        </textarea>
            </div>

            <!-- Send button -->
            <button class="btn btn-info btn-block" name="Guardar" type="submit">Actualizar</button>

    </form>
        <!-- Default form contact -->
     </section>
</section>

<?php
include 'footer.tpl.php';
?>