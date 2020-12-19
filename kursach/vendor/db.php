<?php

    $host = "localhost";
    $name = "root";
    $pas = "root";
    $database = "kurs";


    $mysqli = mysqli_set_charset($con = new mysqli($host, $name, $pas, $database), 'utf-8');

    if(mysqli_connect_errno()){
        printf("Не удалось подключиться: %s\n");
        exit();
    }


?>