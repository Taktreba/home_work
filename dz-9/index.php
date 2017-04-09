<style>
    p {
        color: red;
    }
</style>
<?php
echo '<p>Задание 1</p>';
/* Написать функцию ХХХ (имя подставьте своё), которая на вход принимает
необязательный параметр - число, по-умолчанию равное 0. Значение параметра
необходимо приводить к числу.
В функции необходимо создать файл (в последующем обращении - открыть
существующий) и записывать значение параметра в файл.
Если файл пустой , то запишется число из параметра.
Если файл не пустой , то к значению в файле необходимо прибавить значение в
параметре и записать в тот же файл. Например, в файле хранится число 5, в
параметре 2, в файл запишется 7. */


function sum_number($a)
{
    if (!file_exists('task1.txt')) {
        $file = fopen('task1.txt', 'a');
        fwrite($file, $a);
        fclose($file);
        echo 'создали task1.txt и занесли в него цифру ' . $a;
    } else {
        $ar = file('task1.txt');
        $b = $ar[0] + $a;
        file_put_contents('task1.txt', $b);
        echo 'каждое новое число прибавляем к тому что было записано в файле task1.txt, и перезаписываем его в тот же файл: ' . file_get_contents('task1.txt');
    }
}

sum_number(5);

echo '<p>Задание 2</p>';
/* Даны два файла ХХХ и YYY. В файлах записаны тестовые слова (на латинице,
придумайте сами). разделенными пробелами. Необходимо написать функцию,
которая создаст новые три файла:
only_first.txt : записать слова, которые есть в первом но нет во втором файле;
both.txt : записать слова, которые встречаютсья в обоих файлах;
more_two.txt : записать слова, которые встречаються в каждом файле более двух раз. */
/*
 *  January February February February March April  May May June September
 */

/*
 * February July August June September October October October November November December
 */


function create_new_file($file_one, $file_two)
{
    $file_A = explode(' ', file_get_contents($file_one));
    $file_B = explode(' ', file_get_contents($file_two));


    $tmp1 = []; // ----- 1. записать слова, которые есть в первом но нет во втором файле;
    foreach ($file_A as $v) {
        if (!in_array($v, $file_B)) {
            $tmp1[$v] = 0;
        }
    }
    foreach ($tmp1 as $k => $v) {
        $resource = fopen('2_only_first.txt', 'a');
        fwrite($resource, $k . PHP_EOL);
        fclose($resource);
    }


    $tmp2 = []; // ----- 2. записать слова, которые встречаютсья в обоих файлах
    foreach ($file_A as $v1) {
        foreach ($file_B as $v2) {
            if ($v1 == $v2) {
                $tmp2[$v1] = 0;
            }
        }
    }
    foreach ($tmp2 as $k => $v) {
        $resource = fopen('2_both.txt', 'a');
        fwrite($resource, $k . PHP_EOL);
        fclose($resource);
    }


    $tmp3_a = array_count_values($file_A); // ----- 3. записать слова, которые встречаються в каждом файле более двух раз.
    $tmp3_b = array_count_values($file_B);
    foreach ($tmp3_a as $k => $v) {
        if ($v > 1) {
            $resource = fopen('2_more_two.txt', 'a');
            fwrite($resource, $k . PHP_EOL);
            fclose($resource);
        }
    }
    foreach ($tmp3_b as $k => $v) {
        if ($v > 1) {
            $resource = fopen('2_more_two.txt', 'a');
            fwrite($resource, $k . PHP_EOL);
            fclose($resource);
        }
    }
    echo '<pre>';
    print_r($file_A);
    echo '</pre>';
    echo '<pre>';
    print_r($file_B);
    echo '</pre>';

}

create_new_file('task2_1.txt', 'task2_2.txt');


echo '<p>Задание 3</p>';
/* Дан файл со словами. Упорядочить слова по алфавиту и записать в тот же файл. */
echo 'Открой файл task3.txt и запишите в него произвольный текст. После перезагрузки страницы эта функция отсортирует слова в этом файле по алфавиту';

function overwrite_string($a)
{
    $string = file_get_contents($a);     //----- получаем строку
    $arr = explode(' ', $string);        //----- разбиваем ее по пробелам и записываем в массив
    asort($arr);                         //----- сортируем массив по алфавиту
    $result = fopen($a, 'w');
    $new_string = '';
    foreach ($arr as $v) {               //----- записываем отсортированый массив в новую строку
        $new_string .= $v . ' ';
    }
    fwrite($result, $new_string);         //----- и записываем новую строку в тот же файл
    fclose($result);
}

overwrite_string('task3.txt');


echo '<p>Задание 4</p>';
/*Дан файл. Каждая строка содержит имя, пароль и email, разделенные символами ':'
(двоеточие).
Например:
john:12345: john@gmail.com
kate:12345: kate@gmail.com
test:21345: test@gmail.com
mike:12145: test@gmail.com
Удалить строки с повторами email и строки, в которых совпадают имена (т.е. удалится последняя строка).*/

echo 'Из файла for4.txt извлеките текст и вставте его в файл task4.txt и обновите страницу';
$file = file('task4.txt');
echo '<pre>';
print_r($file);
echo '</pre>';

$unique = [];
foreach ($file as $v) {
    $tmp = explode(':', $v);
    $tmp_name = array_column($unique, 'name');
    $tmp_email = array_column($unique, 'email');
    if (!in_array($tmp[0], $tmp_name) && !in_array(trim($tmp[2]), $tmp_email)) {
        $unique[] = [
            'name' => $tmp[0],
            'password' => $tmp[1],
            'email' => trim($tmp[2])
        ];
    }
}

$count = count($unique);

$clear_file = fopen('task4.txt', 'w');
fclose($clear_file);

for ($i = 0; $i <= $count - 1; $i++) {
    $string_tmp = $unique[$i]['name'] . ':' . $unique[$i]['password'] . ':' . $unique[$i]['email'] . PHP_EOL;
    $resource = fopen('task4.txt', 'a');
    fwrite($resource, $string_tmp);
    fclose($resource);
}

$new_file = file('task4.txt');
echo '<pre>';
print_r($new_file);
echo '</pre>';

echo '<p>Задание 5</p>';
/*Написать функцию, которая будет показывать список всех файлов в данной папке в
виде дерева, как показано на ниже (поиск файлов происходит и во всех вложенных
уровнях).
root dir
-- dir 1
-- dir 2
---- dir 2.1
---- dir 2.2
------ dir 2.2.1
---- dir 2.3 */


$dir = ''; // <----- укажите тут директорию которую нужно просканировать
if ($dir == '') {
    echo 'Укажите директорию которую нужно просканировать в переменной $dir';
} else {
    echo 'Поехали: ' . '<br>';
    function scan_dir($a, $b)
    {
        $arr = scandir($a);
        foreach ($arr as $v) {
            if (($v === '.') || ($v === '..')) {
                continue;
            }
            $path_dir = $a . '\\' . $v;
//        var_dump($path_dir);
            if (is_dir($path_dir)) {
                echo $b . $v . "<br>";
                scan_dir($path_dir, $b . '-');
            } else {
                echo $b . $v . "<br>";
            }
        }
    }

    scan_dir($dir, "-");
}