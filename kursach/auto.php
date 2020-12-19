<?php
session_start();
if (isset($_SESSION['USER'])){
    header("location: profile.php");
}
require_once("page/head.php");
?>


<div class="cont">
    <div class="flex-center">
        <form action="vendor/auto.php" method="POST">
            <label for="">Email</label>
            <input type="email" required placeholder="Введите логин" name="email">
            <label for="">Пароль</label>
            <input type="password" required placeholder="Введите пароль" name="password">
            <button type="submit">Войти</button>
        </form>
        <?php
        if (isset($_SESSION['auto'])){
            echo '<p class="passes">'.$_SESSION['auto'].'</p>';
        }
        unset($_SESSION['auto']);
        ?>
        <a href="register.php">Регистрация</a>
    </div>
</div>


<?php
require_once("page/foot.php");
?>
