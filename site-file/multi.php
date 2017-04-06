<?php
if (isset($_POST['submit'])) {
    $A_number = (int)trim(strip_tags($_POST['A_value']));
    $B_number = (int)trim(strip_tags($_POST['B_value']));

    if ($A_number >= 21 || $B_number >= 21) {
        echo 'Введите значение не больще 20 что бы таблица не была слишком большой!';
    } else {
        function multiplication_table($a, $b)
        {
            echo '<table>';
            for ($i = 1; $i < $a; $i++) {
                echo '<tr>';
                for ($t = 1; $t < $b; $t++) {
                    if ($i === 1 || $t === 1) {
                        echo '<td style="color: red">' . $i * $t . '</td>';
                    } else {
                        echo '<td>' . $i * $t . '</td>';
                    }
                }
                echo '</tr>';
            }
            echo '</table>';
        }

        multiplication_table($A_number+1, $B_number+1);
    }
} else {
    echo '<p>Задайте таблице умножения величину полей</p>';
}

?>
<style>
    table, tr, td {
        padding: 5px;
        border: 1px solid black;
    }

    table {
        border-collapse: collapse;
    }
</style>
<form action="" method="post">
    <p><label><input type="text" name="A_value">Величина таблицы по вертикали</label><br></p>
    <p><label><input type="text" name="B_value">Величина таблицы по горизонтали</label><br></p>
    <p><input type="submit" name="submit" value="Задать величину таблицы умножения"></p>
</form>