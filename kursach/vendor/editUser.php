<?php

    session_start();


    require_once ("db.php");

    $fio = $_GET['fio'];
    $login = $_GET['login'];
    $email = $_SESSION['USER']['email'];

    $query = "UPDATE `users` SET `login` = '$login', `fio` = '$fio' WHERE `email` = '$email'";
    mysqli_query($con, $query);

    header("location: ../profile.php");

?>