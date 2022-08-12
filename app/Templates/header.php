<?php

include("C:\wamp64\www\CRUD-PHP /api/session.php");


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cyborg/bootstrap.min.css">
</head>
<body>
    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container">
            <a href="../" class="navbar-brand">Bienvenido al sistema, <i><?php echo $login_session ?></i></a>
        </div>
        <ul class="navbar-nav ms-md-auto">
            <a href="../api/logout.php"><button type="button" class="btn btn-danger">Salir</button></a>
        </ul>
    </div>
