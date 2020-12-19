<?php

    session_start();
    require_once ("db.php");

    $login = $_POST['email'];
    $password = md5($_POST['password']);

    $autoUser = mysqli_query($con, "SELECT * FROM `users` WHERE `email` = '$login' AND `password` = '$password'");

    if (mysqli_num_rows($autoUser) > 0){

        $user = mysqli_fetch_assoc($autoUser);


        $_SESSION['USER'] = [
            "id" => $user['id'],
            "fio" => $user['fio'],
            "login" => $user['login'],
            "email" => $user['email'],
            "avatar" => $user['avatar'],
            "status" => $user['status'],
        ];

        header("location: ../profile.php");

    }else{
        $_SESSION['auto'] = 'Неверный логин или пароль';
        header("location: ../index.php");
    }

?>