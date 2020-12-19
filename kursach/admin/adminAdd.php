<?php
session_start();
if ($_SESSION['USER']['status'] == 'user'){
    header("location: profile.php");
}
require_once ("../page/head.php");
?>

    <div class="cont">
        <div class="panel">
            <div class="panel-form">
                <form action="../vendor/admin/adminAdd.php" id="admin" method="POST" enctype="multipart/form-data">
                    <input type="text" value="<?= $_SESSION['USER']['email']; ?>" name="email" hidden>
                    <label for="">Название услуги</label>
                    <input type="text" name="name">
                    <label for="">Описание услуги</label>
                    <textarea style="border: 2px solid black; max-width: 100%;" form="admin" rows="10" cols="45" name="description"></textarea>
                    <label for="">Цена за штуку</label>
                    <input type="number" step="0.01" placeholder="0,00" min="0" name="price" >
                    <label for="">Изображение</label>
                    <input type="file" name="avatar">
                    <button type="submit" name="but">добавить</button>
                </form>
            </div>
        </div>
    </div>

<?php
require_once ("../page/foot.php");
?>