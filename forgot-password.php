<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Has olvidado tu contraseña</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="./faviconconfiguroweb.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <h2 class="text-center">Formulario de recuperación de contraseña</h2>
                    <p class="text-center">Ingresa tu dirección de correo electrónico</p>
                    <?php
                    if (count($errors) > 0) {
                    ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach ($errors as $error) {
                                echo $error;
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Ingresa tu dirección de correo electrónico" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continuar">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>