<?php

    $mysqli = new mysqli("localhost", "root", "", "app-crud");

    $ID = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $name;
    

    $sql = $mysqli->prepare("UPDATE users SET Name = ?, Email = ?, Password = ? WHERE ID = ?");

    $sql->bind_param("sssi", $name, $email, $password, $ID);
    $sql->execute();
    header("Location: index.php");

?>