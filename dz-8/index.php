<?php
session_start();
$sec = 0;
if (!isset($_SESSION['user_inter'])) {
    $_SESSION['user_inter'] = date('Y-m-d H:i:s');
    $sec = 'Добро пожаловать на сайт';
    echo $sec;
} else {
    $sec = time() - strtotime($_SESSION['user_inter']);
    echo 'Вы находитесь на сайте ' . $sec . ' секунд'; // считаем секунды преведенные на сайте
}

echo '<hr>';

if (!isset($_SESSION['inter'])) { // считаем количество посицений сайта
    echo 'Вы первый раз на сайте';
    $_SESSION['inter'] = 0;
} else {
    $_SESSION['inter']++;
    echo 'Вы были на сайте ' . $_SESSION['inter'] . ' раз';
}


?>
<form method="post" action="form.php">
    <label><input type="text" name="email" value="">сюда вводим мыло и увидем его на странице form.php</label><br>
    <label><input type="text" name="name" placeholder="name"></label><br>
    <label><input type="text" name="age" placeholder="age"></label><br>
    <label><input type="text" name="city" placeholder="sity"></label><br>
    <input type="submit" name="submit">
</form>
