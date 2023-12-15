<?php

require_once '../Controllers/RolControler.php';

$rolControler = new RolController;

$roles = $rolControler->index();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Registro de Usuarios</title>
</head>

<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" placeholder="User name / Email">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" class="login__input" placeholder="Password">
                    </div>

                    <div>

                        <select name="rol" id="rol">
                            <option value="" disabled selected>Select Rol</option>
                            <?php foreach ($roles as $rol) : ?>

                                <option value="<?= $rol['id'] ?>"><?= $rol['nombre'] ?></option>


                                <?php endforeach; ?> 
                        </select>
                    </div>
                    <button class="button login__submit">
                        <span class="button__text">Registrarse</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
                <div class="social-login">
                    <a href="login.php">Login</a>

                </div>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
</body>

</html>