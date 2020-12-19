<?php

    require_once ('../vendor/db.php');

    $id = $_GET['id'];
    $query = "DELETE FROM services WHERE id=$id";
    $res = mysqli_query($mysqli, $query);

?>