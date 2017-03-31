<style>
    p {
        color: crimson;
    }
</style>
<?php

echo '<p>Задание 4</p>';
$dbc = mysqli_connect('localhost', 'root', '')
or die('Не установлено соединение с БД');

mysqli_select_db($dbc, 'sit');
$query = "SELECT * FROM personal WHERE ID=2";
$result = mysqli_query($dbc, $query);
mysqli_close($dbc);

$row = mysqli_fetch_row($result);

echo 'Выбрать работника с id = 2: ';
foreach ($row as $v) {
    echo $v . ' ';
}

echo '<p>Задание 5</p>';
$dbc = mysqli_connect('localhost', 'root', '')
or die('Не установлено соединение с БД');

mysqli_select_db($dbc, 'sit');
$query = "SELECT * FROM personal WHERE salary=500";
$result = mysqli_query($dbc, $query);
mysqli_close($dbc);

echo 'Выбрать работников с зарплатой 500$: ';
?>
<table style="border: 1px solid black">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>AGE</th>
        <th>SALARY</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($result)): ?>
        <tr>
            <td><?php echo $row[0] ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[3] ?></td>
        </tr>
    <?php endwhile; ?>
</table>
<?php
echo '<p>Задание 6</p>';
echo 'Выбрать работников с зарплатой 500$ и id больше 3: ';

$dbc = mysqli_connect('localhost', 'root', '')
or die('Не установлено соединение с БД');

mysqli_select_db($dbc, 'sit');
$query = "SELECT * FROM personal WHERE ID>=3 AND salary=500";
$result = mysqli_query($dbc, $query);
mysqli_close($dbc);

?>
<table style="border: 1px solid black">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>AGE</th>
        <th>SALARY</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($result)): ?>
        <tr>
            <td><?php echo $row[0] ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[3] ?></td>
        </tr>
    <?php endwhile; ?>
</table>
<?php

echo '<p>Задание 7</p>';

echo 'Был добавлен новый сотрудник: Джон, 20 лет, зарплата 700$: ';

//$dbc = mysqli_connect('localhost', 'root', '')
//or die('Не установлено соединение с БД');
//
//mysqli_select_db($dbc, 'sit');
//$query = "INSERT INTO personal (name,age,salary) VALUE ('Джон','20','700');";
//$result = mysqli_query($dbc, $query);
//mysqli_close($dbc);

echo '<p>Задание 8</p>';
echo 'Были одним запросом три новых работника: Катю, 20 лет, зарплата 500$,
Юлю, 25 лет, зарплата 600$, Женю, 30 лет, зарплата 900$.';

//$dbc = mysqli_connect('localhost', 'root', '')
//or die('Не установлено соединение с БД');

//mysqli_select_db($dbc, 'sit');
//$query = "INSERT INTO personal (name, age, salary) VALUES ('Катя',20,500),('Юля',25,600),('Женя',30,900)";
//$result = mysqli_query($dbc, $query);
//mysqli_close($dbc);

echo '<p>Задание 9</p>';

echo 'Удален работник Джон.';

//$dbc = mysqli_connect('localhost', 'root', '')
//or die('Не установлено соединение с БД');

//mysqli_select_db($dbc, 'sit');
//$query = "DELETE FROM personal WHERE name='Джон'";
//$result = mysqli_query($dbc, $query);
//mysqli_close($dbc);

echo '<p>Задание 10</p>';
echo 'Поставьте Диме зарплату в 900$.' . '<br>';

echo 'UPDATE personal SET salary=900 WHERE name=\'Дима\'';

echo '<p>Задание 11</p>';
echo 'Поставьте Диме зарплату в 1000$ и возраст 20 лет.' . '<br>';
echo 'UPDATE personal SET salary=900, age=20 WHERE name=\'Дима\'';


echo '<p>Задание 12</p>';
echo 'Выбрать работников в возрасте от 25 (не включительно) до 28 лет(включительно).' . '<br>';
echo 'SELECT * FROM personal WHERE age>25 AND age<=28';

echo '<p>Задание 13</p>';
echo 'Выбрать всех работников в возрасте 27 лет или с зарплатой 1000$' . '<br>';
echo 'SELECT * FROM personal WHERE age=25 OR salary=1000;';

echo '<p>Задание 14</p>';
echo 'Выбрать всех работников в возрасте от 23 лет до 27 лет или с зарплатой от 400$ до 1000$' . '<br>';
echo 'SELECT * FROM personal WHERE age>=23 AND age<27 OR salary>=400 AND salary<1000;';


echo '<p>Задание 15</p>';
echo 'Передайте через GET-параметр id работника, которого следует вывести на экран. Выведите его имя, возраст и зарплату.' . '<br>';


$id = $_GET['id'];
$dbc = mysqli_connect('localhost', 'root', '')
or die('Не установлено соединение с БД');

mysqli_select_db($dbc, 'sit');
$query = "SELECT * FROM personal WHERE id=".$id;
$result = mysqli_query($dbc, $query);
mysqli_close($dbc);

$row = mysqli_fetch_row($result);
foreach ($row as $v) {
    echo $v . ' ';
}


















