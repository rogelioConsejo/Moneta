<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="js/valida_registro.js"></script>
</head>
<body class="container" style="padding: 30px;">
<?php
include_once "php/navbar.php";
?>
<form action="php/registro.php" method="POST">
    <div>
        <fieldset class="form-group">
            <div class="row">
                <h1>Crear usuario</h1>
            </div>
            <div class="row">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Ej: usuario@servidor.com" class="form-control"
                       id="email">
            </div>
            <div class="row">
                <label for="password">Contraseña</label>
                <input type="password" name="password" class="form-control" id="password" size="8" required>
            </div>
            <div class="row">
                <label for="confirmarPassword">Confirmar contraseña</label>
                <input type="password" name="confirmarPassword" class="form-control" id="confirmarPassword" size="8" required>
            </div>
        </fieldset>
        <button type="submit" class="btn btn-primary float-right" name="crear_cuenta" value="crear_cuenta" onclick="validarPassword(form)">Crear cuenta </button>

    </div>
</form>
</body>

</html>