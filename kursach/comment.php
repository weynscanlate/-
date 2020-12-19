<?php
    session_start();
    require_once("vendor/db.php");
    require_once ("CRUD/selCom.php");
    require_once("page/head.php");
?>


        <div class="cont">
            <h2 style="font-size: 50px; text-align: center; margin-top: 20px;">Отзывы</h2>
            <?php

                while ($row = mysqli_fetch_assoc($res)){ ?>
                    <div class="comment">
                        <div class="comment-item">
                            <h4 class="authorCom"><?= $row['author'] ?></h4>
                            <p class="authorReview"><?= $row['review'] ?></p>
                        </div>
                    </div>
                    <hr>
                    <?php
                }
            ?>
            <?php
                if(isset($_SESSION['USER'])){ ?>
                    <div class="com">
                        <form action="vendor/comment.php" method="get" id="userCom" style="border: none;">
                            <h4 style="font-size: 18px; margin-bottom: 10px;"><?= $_SESSION['USER']['login']; ?></h4>
                            <input type="text" hidden name="name" value="<?= $_SESSION['USER']['login']; ?>">
                            <textarea name="comment" form="userCom" style="border: 2px solid black; padding: 5px 15px;" rows="10" cols="150"></textarea>
                            <button type="submit" name="but">отправить</button>
                        </form>

                    </div>
                <?php } else{ ?>
                    <div class="com">
                        <form action="vendor/comment.php" method="get" id="userCom" style="border: none;">
                            <input type="text" name="name" placeholder="ваше имя">
                            <textarea name="comment" form="userCom" style="border: 2px solid black; padding: 5px 15px;" rows="10" cols="150"></textarea>
                            <button type="submit" name="but">отправить</button>
                        </form>
                    </div>
                <?php }
            ?>
        </div>

<?php
require_once("page/foot.php");
?>

