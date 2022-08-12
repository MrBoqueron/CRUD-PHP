<?php

    session_start();
    include('db.php');

    $user = $_POST['user'];

    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE Name='" . $user . "' and Password='" . $password . "';";
    $query = mysqli_query($conn,$sql );
    $counter=mysqli_num_rows($query);

    if ($counter==1){
        $_SESSION['login_user_sys']=$user; // Iniciando la sesion
		header("location: ../app/index.php"); // Redireccionando a la pagina profile.php
    } else {
        echo "ERROR";
    }

?>