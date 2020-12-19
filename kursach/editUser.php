<?php
    session_start();

require_once ("page/head.php");


?>

    <div class="cont">
        <div class="panel">
            <div class="panel-form">
                <form action="vendor/editUser.php" method="GET">
                    <label for="">Ваш новый логин</label>
                    <input type="text" name="login"">
                    <label for="">Ваше новое имя</label>
                    <input type="text" name="fio">
                    <button type="submit">Редактировать</button>
                </form>
            </div>
        </div>
    </div>

<?php
    require_once ("page/foot.php");
?>