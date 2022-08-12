<?php
  $mysqli = new mysqli("localhost", "root", "", "app-crud");

  // include("../api/db.php");

  $ID = $_GET['ID'];

  $sql = $mysqli->prepare("SELECT * FROM users WHERE ID = ?");
  $sql->bind_param("i", $ID);
  $sql->execute();
  $result = $sql->get_result();

  $user = $result->fetch_assoc();


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
            <a href="../" class="navbar-brand">Bienvenido al sistema</a>
        </div>
        <ul class="navbar-nav ms-md-auto">
            <a href="../api/logout.php"><button type="button" class="btn btn-danger">Salir</button></a>
        </ul>
    </div>
    <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-11 m-5 text-center">
            <div class="page-header">
              <h1 id="tables">Crear Usuarios</h1>
            </div>

          </div><!-- /example -->
          <div class="container m-5 ">
            <form action="actualizar-usuario.php" method="post">
              <label for="">ID: </label>
              <input type="text" name="id" value="<?php echo $user['ID'] ?>"><br><br>
              <label for="">Nombre: </label>
              <input type="text" name="name" value="<?php echo $user['Name'] ?>"><br><br>
              <label for="">Email: </label>
              <input type="text" name="email" value="<?php echo $user['Email'] ?>"><br><br>  
              <label for="">Contraseña: </label>
              <input type="text" name="password" value="<?php echo $user['Password'] ?>"><br><br>
              <button class="btn btn-lg btn-primary" type="submit">Edita</button>
            </form>
          </div>
        </div>
      </div>

</body>
</html>