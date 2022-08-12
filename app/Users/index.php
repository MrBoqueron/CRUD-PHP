<?php


 include("../Templates/header.php");
$mysqli = new mysqli("localhost", "root", "", "app-crud");

$sql = "SELECT * FROM users";

$resultUsers = $mysqli->query($sql);

$users = $resultUsers->fetch_all(MYSQLI_ASSOC);

?>

    <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-11 m-5 text-center">
            <div class="page-header">
              <h1 id="tables">Usuarios</h1>
            </div>

            <div class="bs-component">
              <table class="table table-hover">
                <thead>
                    <tr class="table-dark">
                    <td>#</td>
                    <td>Nombre</td>
                    <td>Email</td>
                    <td>Contraseña</td>
                    <td>
                      <a href="crear-usuario.php">
                      <button type="button" class="btn btn-success">Nuevo Usuario</button>
                      </a>
                    </td>
                  </tr>
                </thead>
                  <tbody>
                    <?php
                        foreach ($users as $user) {
                    ?>
                    <tr>
                        <td><?php echo $user["ID"]; ?></td>
                        <td><?php echo $user["Name"]; ?></td>
                        <td><?php echo $user["Email"]; ?></td>
                        <td><?php echo $user["Password"]; ?></td>
                        <td>
                        <a href="editar-usuario.php?ID=<?php echo $user["ID"]; ?>"><button type="button" class="btn btn-warning">Editar</button></a>
                        <a href="borrar-usuario.php?ID=<?php echo $user["ID"]; ?>"><button type="button" class="btn btn-danger">Borrar</button></a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>

                </tbody>
              </table>
            </div><!-- /example -->
          </div>
        </div>
      </div>

</body>
</html>