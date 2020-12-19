<?php
    require_once("page/head.php");

?>

    <div class="cont">
        <div class="flex-center">
            <?php
                if (isset($_SESSION['USER'])) { ?>
                    <form action="vendor/orders.php" method="GET" style="margin: 15px 0;">
                        <h3 style="font-size: 28px;"><?= $_GET['name'] ?></h3>
                        <input type="text" value="<?= $_GET['name'] ?>" hidden name="name">
                        <input type="text" value="<?= $_GET['id'] ?>" hidden name="id_service">
                        <input type="text" value="<?= $_SESSION['USER']['fio']; ?>" name="fio" hidden>
                        <input type="text" value="<?= $_SESSION['USER']['email']; ?>" name="email" hidden>
                        <label for="">Количество штук</label>
                        <input type="number" name="size">
                        <button type="submit" name="but">отправить</button>
                        <?php
                        if(isset($_SESSION['orderfalse'])){
                            echo "<p class='passes'>".$_SESSION['orderfalse']."</p>";
                        }
                        unset($_SESSION['orderfalse']);
                        ?>
                    </form>
              <?php  } ?>
        </div>
    </div>

<?php
    require_once("page/foot.php");
?>
