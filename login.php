<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="container" style="padding: 30px;">
<?php
include_once "php/navbar.php";
?>
<form action="php/login.php" method="POST">
        <fieldset class="form-group">
            <div class="row">
                <h1>Acceder</h1>
            </div>
            <div class="row">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Ej: usuario@servidor.com" class="form-control"
                       id="email" required="">
            </div>
            <div class="row">
                <label for="password">Contraseña</label>
                <input type="password" name="password" class="form-control" id="password" required="">
            </div>
        </fieldset>
        <div class="row">
            <div class="offset-md-8 col-md-4">
                <button type="submit" class="btn btn-primary float-right"
                        style="margin-right: 10px">Acceder
                </button>
            </div>
        </div>
</form>
</body>

</html>