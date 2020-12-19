<?php
    session_start();


    require_once ("../db.php");

    $description = $_GET['description'];
    $name = $_GET['name'];
    $price = $_GET['price'];
    $id = intval($_GET['red']);

    $query = "UPDATE `services` SET `name` = '$name', `description` = '$description' , `price` = '$price' WHERE `id` = '$id'";
    mysqli_query($con, $query);

    if (!empty($_GET['red'])){
        header("location: ../../adminEditTrue.php");
    }

?>