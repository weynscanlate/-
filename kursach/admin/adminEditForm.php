<?php
    session_start();
    if ($_SESSION['USER']['status'] == 'user'){
        header("location: profile.php");
    }

    require_once("../vendor/db.php");
    require_once ("../page/head.php");

?>

    <div class="cont">
        <div class="panel">
            <div class="panel-form">
                <form action="../vendor/admin/adminEdit.php" method="GET" id="editForm">
                    <label for="">Название</label>
                    <input type="text" name="name" value="<?= $_GET['name']?>">
                    <label for="">Описание</label>
                    <textarea name="description" value="<?= $_GET['description']?>" form="editForm" rows="10" cols="45" style="border: 2px solid black;"></textarea>
                    <label for="">Цена</label>
                    <input type="number" step="0.01" placeholder="0,00" min="0" name="price" value="<?= $_GET['price']?>">
                    <button type="submit" name="red" value="<?= $_GET['id']?>">отредачить</button>
                </form>
            </div>
        </div>
    </div>

<?php
require_once ("../page/foot.php");
?>