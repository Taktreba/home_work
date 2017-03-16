<?php
if (isset($_GET['submit'])) {
    $firs_name = trim(strip_tags($_GET['firs_name'])); // собираем переменные из GET
    $last_name = trim(strip_tags($_GET['last_name']));
    $phone = trim(strip_tags($_GET['phone']));
    $age = trim(strip_tags($_GET['age']));
    $arr = [$firs_name, $last_name, $phone, $age]; // Запихиваем их в массив для сериализации
    $codeArr = serialize($arr);
    setcookie('data', $codeArr, time() + 60 * 60 * 3); // кука установлена на 3 часа
} elseif (isset($_COOKIE['data'])) { // если кука установлена мы ее записываем в имя и возраст что бы не потерять значения когда выйдем с страницы
    $unSer = unserialize($_COOKIE['data']);
    $firs_name = $unSer[0];
    $age = $unSer[3];

    $bd = explode('-', $unSer[3]);// разбиваем дату рождения на массив
    if ($bd[1] > date('m') || $bd[1] == date('m') && $bd[2] > date('d')) {
        $bd_day = round((mktime(23, 59, 59, $bd[1], $bd[2]) - time()) / (60 * 60 * 24)); // что то не работает нужно по вводить разные даты
        echo 'до дня рождения ' . $bd_day . ' дней';
    } elseif ($bd[1] < date('m') || $bd[1] == date('m') && $bd[2] < date('d')) {
        $bd_day = round((mktime(23, 59, 59, $bd[1], $bd[2], date('Y') + 1) - time()) / (60 * 60 * 24));
        echo 'до дня рождения ' . $bd_day . ' дней';
    }elseif ($bd[1] == date('m') || $bd[1] == date('d')) {
        echo 'У Вас сегодня день рождения и мы Вас с этим торжественно поздравляем!';
    }


} else {
    $firs_name = 'Гость';
    $age = 'извините - возраст еще не определен';
}

//
//$q = explode('-', $age);
//if (date('m') > $q[1]) {
//    $new_age = date('Y') - $q[0];
//} else {
//    $new_age = (date('Y') - $q[0]) - 1;
//}
?>
<!DOCTYPE>
<html>
<head>
    <title>Страница Index.php</title>
</head>
<body>
<h1>Работа с печеньками</h1>
Сегодня у нас <?php echo date('d-M-Y H:i:s'); ?><br>
<a href="DZ-7_hello.php">Переход на страницу hello.php</a><br>
<a href="DZ-7_function.php">Переход на страницу DZ-7_function.php</a>
<br><br>
<form method="get" action="">
    <label>
        <input type="text" name="firs_name" placeholder="Имя"><br>
        <input type="text" name="last_name" placeholder="Фамилия"><br>
        <input type="text" name="phone" placeholder="телефон"><br>
        <input type="date" name="age">
        <input type="submit" value="submit" name="submit">
    </label>
</form>
<p>Привет, <?php echo $firs_name; ?>, ты родился - <?php echo $age; ?></p>
</body>
</html>