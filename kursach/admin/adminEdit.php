<?php
    session_start();
    if ($_SESSION['USER']['status'] == 'user'){
        header("location: profile.php");
    }

    require_once("../vendor/db.php");
    require_once ("../page/head.php");
    require_once 'funcDel.php';

    delete($_GET['del'], $_GET['id'], $con);

?>

    <div class="cont">
        <div class="orders">
            <?php
            require_once ("../CRUD/ready.php");
            while ($row = mysqli_fetch_assoc($res)){ ?>
                <div class="item-orders">
                    <h3 class="item-orders-name"><?= $row['name'] ?></h3>
                    <div class="image-serv">
                        <img src="../<?= $row['avatar']; ?>" alt="">
                    </div>
                    <p class="edit-flex"><?= $row['description'] ?></p>
                    <a href="adminEditForm.php?id=<?= $row['id'] ?>&name=<?= $row['name']?>&description=<?= $row['description']?>&price=<?= $row['price']?>">Редактировать</a>
                    <a href="?del=ok&id=<?= $row['id']; ?>" class="del">Удалить</a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

<?php
    require_once ("../page/foot.php");
?>




