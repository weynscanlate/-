<?php
    require_once("vendor/db.php");
    require_once ("CRUD/ready.php");
    require_once("page/head.php");
?>

    <div class="cont">
        <div class="orders">
        <?php

            while ($row = mysqli_fetch_assoc($res)){ ?>
                <div class="item-orders">
                    <h3 class="item-orders-name"><?= $row['name'] ?></h3>
                    <div class="image-serv">
                        <img src="<?= $row['avatar']; ?>" alt="">
                    </div>
                    <p class="edit-flex"><?= $row['description'] ?></p>
                    <a href="orderForm.php?id=<?= $row['id'] ?>&name=<?= $row['name']?>&price=<?= $row['price']?>">сделать заказ</a>
                </div>
            <?php
            }
        ?>
        </div>
    </div>

<?php
    require_once("page/foot.php");
?>
