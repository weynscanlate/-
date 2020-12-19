<?php
    session_start();
    require_once ("db.php");

    if(isset($_GET['but'])){
        $fio= $_GET['fio'];
        $email = $_GET['email'];
        $size = intval($_GET['size']);
        $name= $_GET['name'];
        $id_service = $_GET['id_service'];

        $query_id = "SELECT id FROM users WHERE email = '$email'";
        $id_user_sql = mysqli_query($con, $query_id);
        foreach ($id_user_sql as $row)
        {
            $id_user =  $row['id'];
        }

        if($size > 0){
            $query = "INSERT INTO `orders` (`id`, `name`, `fio`, `email`, `size`, `id_user`, `id_service`) VALUES (NULL, '$name', '$fio', '$email', '$size', '$id_user', '$id_service')";
            mysqli_query($con, $query);
            header("location: ../orderTrue.php");
echo $id_service;
        }else{
            $_SESSION['orderfalse'] = "Количество не может быть меньше, чем 1";
            header("location: ../orderForm.php");
        }
    }

?>