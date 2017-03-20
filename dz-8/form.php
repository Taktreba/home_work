<?php
session_start();
$sec = 0;
if (!isset($_SESSION['user_inter'])) {
    $_SESSION['user_inter'] = date('Y-m-d H:i:s');
} else $sec = time() - strtotime($_SESSION['user_inter']);
echo 'Вы находитесь на сайте ' . $sec . ' секунд назад'; // продолжаем считать секунды

$_SESSION['email'] = trim(strip_tags($_POST['email']));
$_SESSION['name'] = trim(strip_tags($_POST['name']));
$_SESSION['age'] = trim(strip_tags($_POST['age']));
$_SESSION['city'] = trim(strip_tags($_POST['city']));


?>
<br>
<label><input type="text" name="email_add" value="<?php echo $_SESSION['email']; ?>"></label><br>
<label><input type="text" name="name_add" value="<?php echo $_SESSION['name']; ?>"></label><br>
<label><input type="text" name="age_add" value="<?php echo $_SESSION['age']; ?>"></label><br>
<label><input type="text" name="city_add" value="<?php echo $_SESSION['city']; ?>"></label><br>
<a href="index.php">Переход на index</a>