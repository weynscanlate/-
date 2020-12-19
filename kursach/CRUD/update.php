<?php

    require_once ('../vendor/db.php');

    $query = "UPDATE services SET name = '$name', description = '$description', price = '$price' WHERE id = '$id'";

    $res = mysqli_query($mysqli, $query);


?>