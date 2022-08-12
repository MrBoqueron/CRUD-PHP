<?php
    include('./api/db.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cyborg/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
        <div class="form">
            <h2>Iniciar Sesion</h2><br/><br/>
            <form action="./api/login.php" method="POST">
            <input type="text" placeholder="Usuario" name="user" id="user"><br/><br/>
                <input type="password" placeholder="Contraseña" name="password" id="password"><br/><br/>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>

</body>
</html>