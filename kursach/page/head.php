<?php
    session_start();
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ПолиГраф</title>
    <meta name="keywords" content="Полиграфические услуги в Томске, Заказать визитки, Типография">
    <meta name="description" content="Полиграфические услуги в городе Томск. Выполняем свою работу быстро и качественно по очень низким ценам">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="shortcut icon" href="https://www.cleantown.ru/static/images/typog-printer.png" type="image/x-icon">
</head>
<body>

    <div class="wrapper">
        <header>
            <div class="image"></div>
            <div class="menu-color">
                <div class="conteiner">
                    <div class="menu">
                        <nav>
                            <ul class="head">
                                <li><a href="../index.php">ГЛАВНАЯ</a></li>
                                <li><a href="../about.php">О НАС</a></li>
                                <li><a href="../comment.php">ОТЗЫВЫ</a></li>
                                <li><a href="../contacts.php">КОНТАКТЫ</a></li>
                                <?php
                                    if($_SESSION['USER']['status'] == 'user') {
                                        ?>
                                        <li><a href="../profile.php">ПРОФИЛЬ</a></li>
                                        <li><a href="vendor/logout.php">ВЫХОД</a></li>
                                        <?php
                                    }elseif ($_SESSION['USER']['status'] == 'admin'){
                                ?>
                                    <li><a href="../profile.php">ПРОФИЛЬ</a></li>
                                    <li><a href="../admin.php">АДМИНКА</a></li>
                                    <li><a href="vendor/logout.php">ВЫХОД</a></li>
                                <?php
                                    }else{ ?>
                                        <li><a href="../register.php">РЕГИСТРАЦИЯ</a></li>
                                        <li><a href="../auto.php">АВТОРИЗАЦИЯ</a></li>
                                    <?php }
                                    ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>