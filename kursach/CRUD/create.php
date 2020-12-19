<?php

    require_once ('../vendor/db.php');

    $query = "INSERT INTO `services` (`id`, `name`, `description`, `price`) VALUES (NULL, '', '', '')";
    $res = mysqli_query($mysqli, $query);

?>