<?php
session_start();
if ($_SESSION['USER']['status'] == 'user'){
    header("location: profile.php");
}
require_once("page/head.php");
?>

    <div class="cont">
        <div class="adminka">
            <ul class = "admin-nav">
                <li><a href="admin/adminAdd.php">Добавить услугу</a></li>
                <li><a href="admin/adminEdit.php">Просмотреть услуги</a></li>
            </ul>
        </div>
    </div>

<?php
require_once("page/foot.php");
?>
