<?php
    session_start();
    require_once ("db.php");

    if (isset($_GET['but'])) {
        $comment = $_GET['comment'];
        $author = $_GET['name'];

        $query = "INSERT INTO `comment` (`id`, `author`, `review`) VALUES (NULL, '$author', '$comment')";

        mysqli_query($con, $query);

        header("location: ../comment.php");
    }else{
        echo "траблы";
    }

?>