<?php
    session_start();
    require_once ("../db.php");

    if(isset($_POST['but'])){
        $email = $_POST['email'];
        $description = $_POST['description'];
        $price = intval($_POST['price']);
        $name= $_POST['name'];
        $path = 'uploads/'.time().$_FILES['avatar']['name'];
        move_uploaded_file($_FILES['avatar']['tmp_name'], '../../'.$path);

        $query_id = "SELECT id FROM users WHERE email = '$email'";
        $id_user_sql = mysqli_query($con, $query_id);
        foreach ($id_user_sql as $row)
        {
            $id_user =  $row['id'];
        }

        $query = "INSERT INTO `services` (`id`, `name`, `description`, `price`, `avatar`, `id_user`) VALUES (NULL, '$name', '$description', '$price', '$path', '$id_user')";
        mysqli_query($con, $query);

        $autoServ = mysqli_query($con, "SELECT * FROM `services`");

        if (mysqli_num_rows($autoServ) > 0){

            $service = mysqli_fetch_assoc($autoServ);


            $_SESSION['SERVICE'] = [
                "id" => $service['id'],
                "name" => $service['name'],
                "login" => $service['description'],
                "email" => $service['price'],
                "avatar" => $service['avatar'],
            ];

            header("location: ../../admin/adminAdd.php");

        }

    }

?>