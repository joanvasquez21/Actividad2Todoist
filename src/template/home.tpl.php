<?php

include APP . '/src/template/header.tpl.php';

?>

<!-- Default form login -->
<section class="container col-3 mt-5 md-12 ">
    <form class="text-center border border-light p-5 md-12" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

        <p class="h4 mb-4">Iniciar sesión</p>

        <!-- Email -->
        <input type="input" id="defaultLoginFormEmail" name="usuario" class="form-control mb-4 md-12" placeholder="joan / toni">

        <!-- Password -->
        <input type="password" id="defaultLoginFormPassword" name="password" class="form-control mb-4" placeholder="123">

        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit">Entrar</button>

        <!-- Register -->
        <p>¿No tienes una cuenta?
            <a href="register.tpl.php">Regístrate</a>
            <!-- <a href="./controller/register.php">Regístrate</a> -->
        </p>

        <!-- Comprobamos si la variable errores esta seteada, si es asi mostramos los errores -->
        <?php if (!empty($errores)) : ?>
            <div class="error">
                <ul>
                    <?php echo $errores; ?>
                </ul>
            </div>
        <?php endif; ?>

    </form>
</section>

<?php
include APP . '/src/template/footer.tpl.php';
?>