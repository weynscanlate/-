<?php

    session_start();
    require_once ("db.php");

    $query = "SELECT * FROM users";
    $res = mysqli_query($con, $query);

    $count = mysqli_num_rows($res);

    $fio = $_POST['fio'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];

    $objectid = "SELECT email FROM users WHERE email = '$email'";

    $result = mysqli_fetch_assoc(mysqli_query($con, $objectid));

    if ($password !== $passwordConfirm) {
        $_SESSION["pasmes"] = "Пароли не совпадают";
        header("location: ../register.php");

    }elseif($result['email'] === $email){
        $_SESSION["falemail"] = "Такой email существует";
        header("location: ../register.php");

    } elseif($password === $passwordConfirm && $raw['email'] !== $email){
        $password = md5($password);
        $query = "INSERT INTO `users` (`fio`, `login`, `email`, `password`) VALUES('$login', '$fio','$email', '$password')";
        mysqli_query($con, $query);
        $_SESSION["trueLog"] = "Регистрация завершена";
        header("location: ../index.php");
    }







?>