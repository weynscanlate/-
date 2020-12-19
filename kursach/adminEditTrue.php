<?php
session_start();
if ($_SESSION['USER']['status'] == 'user'){
    header("location: profile.php");
}
require_once("page/head.php");

?>

<div class="cont">
    <div class="flex-center">
        <h2 style="font-size: 28px;">Редактирование прошло успешно</h2>
        <a href="admin.php">Вернуться в админ панель</a>
    </div>
</div>

<?php
require_once("page/foot.php");
?>
