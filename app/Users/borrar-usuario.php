<?php

    $mysqli = new mysqli("localhost", "root", "", "app-crud");

    $ID = $_GET['ID'];
    

    $sql = $mysqli->prepare("DELETE FROM users WHERE ID = ?");

    $sql->bind_param("i", $ID);
    $sql->execute();
    header("Location: index.php");

?>