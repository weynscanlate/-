<?php
    session_start();
    if (isset($_SESSION['USER'])){
        header("location: profile.php");
    }
    require_once("page/head.php");
?>


    <div class="cont">
        <div class="flex-center">
            <form action="vendor/reg.php" method="POST">
                <label for="">ФИО</label>
                <input type="text" required placeholder="Ваше полное имя" name="fio">
                <label for="">Логин</label>
                <input type="text" required placeholder="Введите ваш логин" name="login" min="5">
                <label for="">email</label>
                <input type="email" required placeholder="Ваше ваш email" name="email">
                <label for="">Пароль</label>
                <input type="password" required placeholder="Введите ваш пароль" name="password" min="6">
                <label for="">Повтор пароля</label>
                <input type="password" required placeholder="Повторите ваш пароль" name="passwordConfirm">
                <button type="submit">регистрация</button>
            </form>
            <?php
            if (isset($_SESSION['pasmes'])){
                echo '<p class="passes">'.$_SESSION['pasmes'].'</p>';
            }elseif (isset($_SESSION["falemail"])){
                echo '<p class="passes">'.$_SESSION["falemail"].'</p>';
            }
            unset($_SESSION['pasmes']);
            unset($_SESSION['falemail']);
            ?>
            <a href="index.php">Авторизация</a>
        </div>
    </div>


<?php
require_once("page/foot.php");
?>
