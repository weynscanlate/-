<?php

    require_once("vendor/db.php");

    $query = "SELECT * FROM users";
    $res = mysqli_query($mysqli, $query);

    $raw = mysqli_fetch_assoc($res);

    print_r($raw);

?>