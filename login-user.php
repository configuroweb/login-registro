<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulario de Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="./faviconconfiguroweb.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Formulario de Login</h2>
                    <p class="text-center">Inicie sesión con su correo electrónico y contraseña.</p>
                    <?php
                    if (count($errors) > 0) {
                    ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach ($errors as $showerror) {
                                echo $showerror;
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Dirección de correo" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Contraseña" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Olvidaste tu contraseña?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Ingresar">
                    </div>
                    <div class="link login-link text-center">¿Todavía no eres miembro? <a href="signup-user.php">Regístrate ahora</a></div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>