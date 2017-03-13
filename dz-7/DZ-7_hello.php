<?php
if (isset($_COOKIE['data'])) {
    $unSer = unserialize($_COOKIE['data']);//сделать массив и передать его куки
    $firs_name = $unSer[0];
    $last_name = $unSer[1];
    $phone = $unSer[2];
    $age = $unSer[3];
} else {
    $firs_name = $last_name = $phone = $age = 'введи данные';
}

?>
<style>
    table {
        border-collapse: collapse;
        padding: 4px;
    }

    td {
        border: 1px solid green;
    }
</style>
<!DOCTYPE>
<html>
<head>
    <title>Страница Index.php</title>
</head>
<body>
<h1>Работа с печеньками</h1>
<a href="DZ-7_index.php">Переход на страницу Index.php</a>
<br><br>
<p>Привет, <?php echo $firs_name; ?>!</p>
<table>
    <tr>
        <td>Имя</td>
        <td><?php echo $firs_name; ?></td>
    </tr>
    <tr>
        <td>Фамилия</td>
        <td><?php echo $last_name; ?></td>
    </tr>
    <tr>
        <td>День рождения</td>
        <td><?php echo $age; ?></td>
    </tr>
    <tr>
        <td>Телефон</td>
        <td><?php echo $phone; ?></td>
    </tr>
</table>
<p><a href="DZ-7_function.php">Переход к функциям с куки</a> </p>
</body>
</html>