<?php
    session_start();
    if (!isset($_SESSION['USER'])){
        header("location: index.php");
    }
require_once("page/head.php");
?>

<div class="cont">
        <div class="profile">
            <h2><?= $_SESSION['USER']['status']?></h2>
            <a href="vendor/delete.php?name=<?= $_SESSION['USER']['login']; ?>">Удалить профиль</a><br>
            <a href="editUser.php?name=<?= $_SESSION['USER']['login']; ?>&fio=<?= $_SESSION['USER']['fio']; ?>">Редактировать профиль</a>
        </div>
</div>

<?php
require_once("page/foot.php");
?>
