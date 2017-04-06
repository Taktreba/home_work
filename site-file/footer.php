<?php
?>
<footer>
    <div><a href="index.php"> my-site.com</a></div>
    <div>Вы посетили сайт <?php echo $_SESSION['visitorCount']; ?></div>
    <div>Последний раз вы были <?php echo $lastVisit; ?></div>
    <div>Вы провели на сайте <?php echo $sec; ?> секунд</div>
</footer>