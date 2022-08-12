<?php

    include("db.php");
    // include("login.php");

    session_start();

    $user_check=$_SESSION['login_user_sys'];

   $session_sql = mysqli_query($conn, "SELECT * FROM users WHERE Name = '$user_check' ");
   
   $row = mysqli_fetch_array($session_sql,MYSQLI_ASSOC);

   $login_session = $row['Name'];
   
   if(!isset($login_session)){
    mysqli_close($conn);
    header('Location: ../app/index.php');
   }

?>