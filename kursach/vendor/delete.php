<?php
    session_start();
    require_once ("db.php");

    $login = $_GET['name'];

    $query = "DELETE FROM users WHERE login='$login'";
    $res = mysqli_query($con, $query);

    unset($_SESSION['USER']);

    header("location: ../index.php");

?>