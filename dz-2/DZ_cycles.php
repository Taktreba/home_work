<?php
echo '<h1>Цикли</h1>';

/* 1.	Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик. */
echo '<p>Задание 1</p>';

$arr1 = array ('html', 'css', 'php', 'js', 'jq');

foreach ($arr1 as $k => $v) {
    echo $v . '<br>';
}

/*2.	Дан массив с элементами 1, 20, 15, 17, 24, 35.
С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result. */
echo '<p>Задание 2</p>';

$result = '';
$arr2 = array (1, 20, 15, 17, 24, 35);
foreach ($arr2 as $k => $v) {
    $result += $v;
}
 echo $result;

/* 3.	Дан массив с элементами 26, 17, 136, 12, 79, 15.
С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result. */
echo '<p>Задание 3</p>';

$result = '';
$arr3 = array(26, 17, 136, 12, 79, 15);
foreach ($arr3 as $k => $v) {
    $kor = $v ** 2;
    $result += $kor;
}
echo $result;


/* 4.	Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'); */
echo '<p>Задание 4</p>';

$arr4 = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr4 as $k => $v) {
    echo $k. '<br>';
}
foreach ($arr4 as $k => $v) {
    echo $v. '<br>';
}

/*5.	Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'.
С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200 долларов.'. */
echo '<p>Задание 5</p>';

$arr5 = [
    "Коля" => "200",
    "Вася" => "300",
    "Петя" => "400"
];

foreach ($arr5 as $k => $v) {
    echo "$k - зарплата $v долларов". '<br>';
}

/* 6.	Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru.

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array('green', 'red','blue');
$ru = array('зеленый', 'красный', 'голубой'); */
echo '<p>Задание 6</p>';
$en = [];
$ru = [];
$arr6 = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr6 as $k => $v) {
    $en[] = $k;
    $ru[] = $v;
}
var_dump($en);
echo '<br>';
var_dump($ru);

/*7.	Дан массив с элементами 2, 5, 9, 15, 0, 4.
С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, значения которых больше 3-х, но меньше 10. */
echo '<p>Задание 7</p>';

$arr7 = [2, 5, 9, 15, 0, 4];
foreach ($arr7 as $v) {
    if($v > 3 && $v <10 ) {
        echo $v . '<br>';
    }
}

/* 8.	Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '-1-2-3-4-5-6-7-8-9-'. */
echo '<p>Задание 8</p>';

$arr8 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$str = '';
foreach ($arr8 as $v) {
    $str .= '-' . $v;
}
echo $str . '-';

///*9.	 Выведите столбец чисел от 1 до 100 */
//echo '<p>Задание 9</p>';
//for ($i = 1; $i <= 100; $i++) {
//    echo $i . '<br>';
//}
// /* 10.	Выведите столбец чисел от 11 до 33. */
//echo '<p>Задание 10</p>';
//for ($i = 11; $i <= 33; $i++) {
//    echo $i . '<br>';
//}
// /* 11.	Выведите столбец четных чисел в промежутке от нуля до 100. */
//echo '<p>Задание 11</p>';
//for ($i = 0; $i <= 100; $i++) {
//    if($i % 2 == 0) {
//        echo $i . '<br>';
//    }
//}

/*12.	Дано число $n = 1000.
Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится?
Посчитайте количество итераций, необходимых для этого (итерации — это количество проходов цикла),
и запишите его в переменную $num */
echo '<p>Задание 12</p>';

$n = 1000;
$num = 0;

while($n >= 50) {
    $n = $n / 2;
    $num++;
}
echo $n . '<br>';
echo $num;

/* 13.	Дан массив с элементами 4, 2, 5, 19, 13, 0, 10.
С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, которые больше 3-х, но меньше 10. */
echo '<p>Задание 13</p>';

$arr13 = [4, 2, 5, 19, 13, 0, 10];
foreach ($arr13 as $v) {
    if($v > 3 && $v < 10) {
        echo $v . '<br>';
    }
}

/* 14.	Дан массив с элементами 4, 2, 5, 19, 13, 0, 10.
С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением $e,
равном 2, 3 или 4. Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'. */
echo '<p>Задание 14</p>';

$arr14 = array(4, 2, 5, 19, 13, 0, 10);
foreach($arr14 as $e) {
    if($e == 2 || $e == 3 || $e == 4){
        echo 'Есть!'; break;
    }
    else {
        echo 'Нет!'; break;
    }
}

/*15.	Дан массив $arr.
С помощью цикла foreach и переменной $count подсчитайте количество элементов этого массива.
Проверьте работу скрипта на примере массива с элементами 4, 2, 5, 19, 13, 0, 10. */
echo '<p>Задание 15</p>';


$arr15 = [4, 2, 5, 19, 13, 0, 10];
$count = 0;
foreach ($arr15 as $v) {
    $count++;
}
echo $count;

/* 16.	Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
С помощью цикла foreach и оператора if выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3
4, 5, 6
7, 8, 9
*/
echo '<p>Задание 16</p>';

$arr16 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr16 as $v) {
    if($v == 1) {
        echo '1 ,2, 3' . '<br>';
    }
    elseif($v == 4) {
        echo '4 ,5, 6' . '<br>';
    }
    elseif($v == 7) {
        echo '7, 8, 9';
    }
}

/* 17.	Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным.
Текущий месяц должен храниться в переменной $month. */
echo '<p>Задание 17</p>';

$arr17 = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

$today = date("F");
foreach ($arr17 as $v) {
    if($v == $today) {
        echo "<b>$v</b>" . '<br>';
    }
    else {
        echo $v . '<br>';
    }
}

/* 18.	Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом.
Текущий день должен храниться в переменной $day. */
echo '<p>Задание 18</p>';

$arr18 = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
$day = date('l');
foreach ($arr18 as $v) {
    if($v == $day) {
        echo "<i>$v</i>". '<br>';
    }
    else {
        echo $v . '<br>';
    }
}

/* 19.	Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.
x
xx
xxx
xxxx
xxxxx
*/
echo '<p>Задание 19</p>';

$str = '';
for($i = 0; $i < 20; $i++) {
    $str .= 'x';
    echo $str . '<br>';
}

/* 20.	Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.
1
22
333
4444
55555
*/
echo '<p>Задание 20</p>';
$str1 = '';
for ($i = 1; $i <= 9; $i++)
{
    for ($j = 0; $j < $i; $j++)
    {
        $str1 .= $i;
    }
    echo $str1.'<br>';
    $str1 = '';
    $j = 0;
}

/* 21.	Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.
xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx
*/
echo '<p>Задание 21</p>';

$str2 = '';
for ($i = 0; $i < 5; $i++) {
    $str2 .= 'xx';
    echo $str2 . '<br>';
}

$str3 = '';
$i = 0;
while ($i < 5) {
    $i++;
    $str3 .= 'xx';
    echo $str3 . '<br>';
}

/* 22 Создайте массив,
заполните его случайными значениями (можно использовать функцию rand, например $var  = rand(5, 15)),
найдите максимальное и минимальное значение массива и поменяйте их местами. */
echo '<p>Задание 22</p>';

$arr22 = [];
for ($i = 0; $i <= 20; $i++) {
    $arr22[] = rand(1, 20);
}
print_r($arr22);

$min = min($arr22);
$max = max($arr22);

foreach ($arr22 as $k => $v) {
    if($v == $min) {
        $arr22[$k] = $max;
    }
    if($v == $max) {
        $arr22[$k] = $min;
    }
}
echo '<hr>';
print_r($arr22);

/* 23.	(+1) Создайте массив и заполните его случайными числами от 1 до 100 (rand).
    Выведите на экран элементы, значения которых больше нуля и у которых не парный индекс.
    Также вычислите произведение тех элементов,
    значения которых больше нуля и у которых парные индексы (парное число - это число, кратное 2),
    результат выведите на экран. */
echo '<p>Задание 23</p>';

$arr23 = [];
for($i = 0; $i <= 5; $i++) {
    $arr23[] = rand(1, 100);
}
print_r($arr23);
echo '<br>';
$sum23 = '1';
foreach ($arr23 as $k => $v) {
    if($v > 0 && $v % 2 != 0) {
        echo "$v - это нечетное число" . '<br>';
    }
    if($v > 0 && $v % 2 == 0) {
        echo "$v - это четное число" . '<br>';
        $sum23 = $sum23 * $v;
    }

}
echo "Произведение четных чисел будет = $sum23";

/* 24.	(+1) Дана строка ‘123456789’.
С помощью цикла и дополнительной переменной разверните строку так, чтобы в итоге получилось ‘987654321’.
Результат выводить после окончания цикла, но не внутри. */
echo '<p>Задание 24</p>';

$a = '123456789';
$b = '';
for($i = strlen($a)-1; $i >= 0; $i--) {
    $b.= $a[$i];
}
$a = $b;
echo $a;
?>
<style>
    h1 {
        color: darkblue;
    }
    p {
        color: orange;
    }
</style>