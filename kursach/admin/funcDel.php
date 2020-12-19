<?php

function delete($del, $i, $con)
{
    if (!empty($del) && !empty($i)) {

        $id = $_GET['id'];
        $query_avatar = "SELECT avatar FROM services WHERE id = '$id'";
        $id_avatar_sql = mysqli_query($con, $query_avatar);
        foreach ($id_avatar_sql as $row)
        {
            $avatar =  $row['avatar'];
        }

        unlink("../${avatar}");

        $query = "DELETE FROM services WHERE id=$id";
        $res = mysqli_query($con, $query);

        if (!$res) die (mysqli_error($con));


        if (mysqli_affected_rows($con) == 1) {
            echo "<h2>Услуга удалена</h2>";
        }

    }
}