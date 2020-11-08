<?php
    include 'src/template/header.tpl.php';
?>
<main>
    <h1>Login</h1>

</main>

<form class="form" action="?url=logation">
    <p>Sign in please ...</p>
    <div class="form-row">
        <input type="text" name="email" id="" placeholder="email" value="<?php if (isset($_COOKIE['active']) &&
            isset($_COOKIE['email'])) {
                echo $_COOKIE['email'];
            }
            ?>">

    </div> 
</form>
        </main>
        <?php
            include 'src/template/footer.tpl.php';
        ?>