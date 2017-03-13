<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашка 6</title>
    <style>
        table, th, td {
            border: 1px solid green;
            border-collapse: collapse;
            padding: 10px;
        }

        h1 {
            color: green;
            text-align: center;
        }

        table {
            margin: auto;
        }
    </style>
</head>
<body>
<h1>Домашнее задание номер 6</h1>
<form method="post" action="">
    <table>
        <tr>
            <td><label for="date1">Дата - 1</label></td>
            <td>
                <input type="text" name="date1" id="date1" placeholder="год-месяц-день">
            </td>
        </tr>
        <tr>
            <td><label for="date2">Дата - 2</label></td>
            <td>
                <input type="text" name="date2" id="date2" placeholder="год-месяц-день">
            </td>
        </tr>
        <tr>
            <td>Выберите необходимый формат даты</td>
            <td><label><input type="radio" name="format" value="format1" checked>dd.mm.YY</label>
                <label><input type="radio" name="format" value="format2">YY.mm.dd</label></td>
        </tr>


        <tr>
            <td>Введеные вами даты</td>
            <td>
                <?php
                $date1 = '';
                $date2 = '';

                if (empty($_POST['submit'])) {                                    // проверяю нажата ли кнопка submit
                    echo "Давайте же заполним форму и отправим ее!";
                } else {                                                           // проверяю на ввод данные в форму 1
                    if (empty($_POST['date1'])) {
                        echo "Вы не указали дату-1";
                    } else {
                        $date1 = $_POST['date1'];                               // полученные данные записыаваем в переменную и записываем это все в массив
                        $piecesDATA1 = explode("-", $date1);
                        if (count($piecesDATA1) != 3) {
                            echo "Дату нужно водить в формате ГОД-МЕСЯЦ-ДЕНЬ через дефис";
                        } else {
                            if ($_POST['format'] == "format1") {
                                echo "Первую дату которую вы ввели - " . "$piecesDATA1[2].$piecesDATA1[1].$piecesDATA1[0]" . '<br>';
                            } elseif ($_POST['format'] == "format2") {
                                echo "Первую дату которую вы ввели - " . "$piecesDATA1[0].$piecesDATA1[1].$piecesDATA1[2]" . '<br>';
                            }

                        }
                    }

                    if (empty($_POST['date2'])) {
                        echo "Вы не указали дату-2";
                    } else {
                        $date2 = $_POST['date2'];
                        $piecesDATA2 = explode("-", $date2);
                        if (count($piecesDATA2) != 3) {
                            echo "Дату нужно водить в формате ГОД-МЕСЯЦ-ДЕНЬ через дефис";
                        } else {
                            if ($_POST['format'] == "format1") {
                                echo "Вторую дату которую вы ввели - " . "$piecesDATA2[2].$piecesDATA2[1].$piecesDATA2[0]" . '<br>';
                            } elseif ($_POST['format'] == "format2") {
                                echo "Вторую дату которую вы ввели - " . "$piecesDATA2[0].$piecesDATA2[1].$piecesDATA2[2]" . '<br>';
                            }
                        }
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Задание - 1</td>
            <td>
                <?php
                /*1.	Пользователь вводит число, а скрипт определяет високосный ли год.
                Сделать проверку на формат и количество введенных значений.
                Если есть ошибка - уведомить об этом пользователя. */
                function leapyear($year) // функция для определения высокостного года
                {
                    return date("L", mktime(0, 0, 0, 7, 7, $year));
                }

                if (empty($piecesDATA1)) {
                    echo "Данные еще не ввели" . '<br>';
                } else {
                    if (leapyear($piecesDATA1[0]) == 0) {
                        echo $piecesDATA1[0] . " год НЕ высокосный" . '<br>';
                    } else {
                        echo $piecesDATA1[0] . " год высокосный" . '<br>';
                    }
                }

                if (empty($piecesDATA2)) {
                    echo "Данные еще не ввели" . '<br>';
                } else {
                    if (leapyear($piecesDATA2[0]) == 0) {
                        echo $piecesDATA2[0] . " год НЕ высокосный" . '<br>';
                    } else {
                        echo $piecesDATA2[0] . " год высокосный" . '<br>';
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Задание - 2</td>
            <td>
                <?php
                /*2.	Пользователь передает две даты.
                Первую дату запишите в переменную $date1, а вторую в $date2.
                Сравните, какая из введенных дат больше.
                С помощью функций explode и mktime переведите большую дату в формат timestamp.\
                По этому timestamp узнайте день недели (словом, латиницей) и выведите его на экран. */
                if (empty($piecesDATA1) && empty($piecesDATA2)) {
                    echo "Данные еще не ввели";
                } else {
                    $q = mktime(0, 0, 0, $piecesDATA1[1], $piecesDATA1[2], $piecesDATA1[0]); // дата - 1 в mktime
                    $w = mktime(0, 0, 0, $piecesDATA2[1], $piecesDATA2[2], $piecesDATA2[0]); // дата - 2 в mktime
                    if ($q > $w) {
                        echo $date1 . " больше чем " . $date2 . '<br>';
                        echo mktime(0, 0, 0, $piecesDATA1[1], $piecesDATA1[2], $piecesDATA1[0]) . " дата-1 в фомате mktime" . '<br>';
                        echo date('l', mktime(0, 0, 0, $piecesDATA1[1], $piecesDATA1[2], $piecesDATA1[0]));
                    } else {
                        echo $date2 . " больше чем " . $date1 . '<br>';
                        echo mktime(0, 0, 0, $piecesDATA2[1], $piecesDATA2[2], $piecesDATA2[0]) . " дата-2 в фомате mktime" . '<br>';
                        echo date('l', mktime(0, 0, 0, $piecesDATA2[1], $piecesDATA2[2], $piecesDATA2[0]));
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Задание - 3</td>
            <td>
                <?php
                /*3.	В поле вводится дата.
                Прибавьте к этой дате 1 год 2 месяца и 3 дня. Отнимите от этой даты 5 дней.
                Результат преобразуйте ее в выбранный формат и отобразите на экране */
                if (empty($piecesDATA1) && empty($piecesDATA2)) {
                    echo "Данные еще не ввели";
                } else {
                    echo $date1 . " Введеная дата номер один" . '<br>';
                    $w = mktime(0, 0, 0, $piecesDATA1[1], $piecesDATA1[2], $piecesDATA1[0]) + (60 * 60 * 24 * (365 + 62));
                    echo date("Y-m-d", $w) . ' плюс 1 год 2 месяца и 3 дня' . '<br>';
                    echo date("Y-m-d", $w - 423000) . " минус 5 дней";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Задание - 4</td>
            <td>
                <?php
                /*4.	С помощью адресной строки передайте GET-параметр date, который хранит год (4 числа).
                Посчитайте сколько воскресений в введенном году приходится на первое число месяца.*/
                $countDay = 0;
                if (empty($_GET['date'])) {
                    echo "Введите в адресную строку значение date";
                } else {
                    for ($i = 1; $i < 12; $i++) {
                        if (date('w', mktime(0, 0, 0, $i, 1, $_GET['date'])) == 0) {
                            $countDay++;
                        }
                    }
                    echo "В этом году воскереснье " . $countDay . " раза попадает на 1 число";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Задание - 5</td>
            <td>
                <?php
                /*5.	С помощью адресной строки передайте GET-параметр date, который хранит год (4 числа).
                Найдите все пятницы 13-е в этом году. Результат выведите в виде списка дат. */
                $countFriday = 0;
                if (empty($_GET['date'])) {
                    echo "Введите в адресную строку значение date";
                } else {
                    for ($i = 1; $i < 12; $i++) {
                        if (date('w', mktime(0, 0, 0, $i, 13, $_GET['date'])) == 5) {
                            echo date('Y-m-d', mktime(0, 0, 0, $i, 13, $_GET['date'])) . '<br>';
                        }
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Задание - 6</td>
            <td>
                <?php
                /*6.	Дан GET-параметр date, в который вводится год.
                Узнайте, какой это будет год по восточному календарю. Результат выведите на экран */
                if (empty($_GET['date'])) {
                    echo "Введите в адресную строку значение date";
                } else {
                    $qwe = $_GET['date'] - 3;
                    switch ($qwe) {
                        case($qwe % 12 == 1):
                            echo "Крыса";
                            break;
                        case($qwe % 12 == 2):
                            echo "Бык";
                            break;
                        case($qwe % 12 == 3):
                            echo "Тигр";
                            break;
                        case($qwe % 12 == 4):
                            echo "Кролик";
                            break;
                        case($qwe % 12 == 5):
                            echo "Дракон";
                            break;
                        case($qwe % 12 == 6):
                            echo "Змея";
                            break;
                        case($qwe % 12 == 7):
                            echo "Лошадь";
                            break;
                        case($qwe % 12 == 8):
                            echo "Коза";
                            break;
                        case($qwe % 12 == 9):
                            echo "Обезьяна";
                            break;
                        case($qwe % 12 == 10):
                            echo "Петух";
                            break;
                        case($qwe % 12 == 11):
                            echo "Собака";
                            break;
                        case($qwe % 12 == 12):
                            echo "Свинья";
                            break;
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Задание - 7</td>
            <td>
                <?php
                /*7.	Пользователь в форму вводит дату, например, 2017-01-01.
                Найдите количество дней, часов, минут, секунд, прошедших с 2017-01-01 23:59:59 до настоящего момента.*/
                if (empty($piecesDATA1) && empty($piecesDATA2)) {
                    echo "Данные еще не ввели";
                } else {
                    echo $date1 . ' - Введеное время' . '<br>';
                    echo date('Y-m-d') . ' - Текущая дата' . '<br>';
                    $enterTime = mktime(23, 59, 59, $piecesDATA1[1], $piecesDATA1[2], $piecesDATA1[0]);
                    echo '<br>';
                    echo time() - $enterTime . ' секунд прошло с ' . $date1 . '<br>';
                    echo (time() - $enterTime) / 60 . ' минут прошло с ' . $date1 . '<br>';
                    echo (time() - $enterTime) / 60 / 60 . ' часов прошло с ' . $date1 . '<br>';
                    echo (time() - $enterTime) / 60 / 60 / 24 . ' дней прошло с ' . $date1 . '<br>';
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Задание - 8</td>
            <td>
                <?php
                /*8.	Пользователь в форму вводит дату. Узнайте какой день недели был 100 лет назад.*/
                if (empty($piecesDATA1)) {
                    echo "Данные еще ввели";
                } else {
                    $q = mktime(0, 0, 0, $piecesDATA1[1], $piecesDATA1[2], $piecesDATA1[0]); // Входящая дата
                    $w = 3153600000 + 2160000;  // 100 лет на секунды + 25 дней компенсации высокостного года
                    $e = $q - $w;
                    echo date('l', $e) . '<br>'; // идиотское решение =)
                    echo date('Y-m-d', $e);
                }
                echo '<hr>';


                if (empty($piecesDATA1)) {
                    echo "Данные еще ввели";
                } else {
                    $r = mktime(0, 0, 0, $piecesDATA1[1], $piecesDATA1[2], $piecesDATA1[0] - 100);
                    echo date('Y-m-d l', $r) . '<br>'; // нормальное рещение
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Задание - 9</td>
            <td>
                <?php
                /*9.	Создайте html-форму.
                Добавьте на форму 4 элемента с типом checkbox, сгруппированных с помощью элемента fieldset.
                Чекбоксы должны иметь названия: html, css, php, javascript.
                Названия чекбоксам задаются с помощью элемента label.
                Спросите у пользователя, какие из языков он знает: html, css, php, javascript.
                Выведите на экран те языки, которые знает пользователь.
                Если пользователь не отметил ни один язык — выведите на экран сообщение об этом. */
                ?>
                <fieldset style="width: 200px ">
                    <label><input type="checkbox" name="language[]" value="html">html</label> <br>
                    <label><input type="checkbox" name="language[]" value="css">css</label> <br>
                    <label><input type="checkbox" name="language[]" value="php">php</label> <br>
                    <label><input type="checkbox" name="language[]" value="javascript">javascript</label> <br>
                </fieldset>
                <?php
                echo '<br>';
                if (empty($_POST['language'])) {
                    echo "Пользователь либо еще не ввел не какие данные, или он не знает не один язык и ему нужно звонить в source it";
                } else {
                    foreach ($_POST['language'] as $k => $v) {
                        echo $v . '<br>';
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Задание - 10</td>
            <td>
                <?php
                /*10.	Создайте html-форму.
                Спросите у пользователя знает ли он PHP с помощью двух radio-кнопок.
                Выведите результат на экран. Сделайте так, чтобы по умолчанию один из вариантов был уже отмечен.*/
                ?>
                <fieldset style="width: 200px">
                    Знаете ли вы PHP? <br>
                    <label><input type="radio" name="didyounow" value="ЗНАЕТ" checked> Yes, i know PHP </label><br>
                    <label><input type="radio" name="didyounow" value="НЕ занет"> No, i don't know PHP</label>
                </fieldset>
                <?php
                if (empty($_POST['didyounow'])) {
                    echo "Юзернейм еще не определился";
                } else {
                    echo "Юзернейм решил что он " . $_POST['didyounow'] . " php. Хотя кто ему поверит";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Задание - 11</td>
            <td>
                <?php
                /*11.	Создайте html-форму.
                Спросите у пользователя его возраст с помощью нескольких radio-кнопок, сгруппированных элементом fieldset.
                Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30.
                Результат выдайте на экран в видет “Ваш возраст в диапазоне <n> лет”. */
                ?>
                <fieldset style="width: 200px">
                    <label><input type="radio" name="age" value="менее 20"> менее 20 лет</label><br>
                    <label><input type="radio" name="age" value="20-25"> мне 20-25 лет </label><br>
                    <label><input type="radio" name="age" value="26-30"> мне 26-30 </label><br>
                    <label><input type="radio" name="age" value="30"> мне больше 30 лет </label>
                </fieldset>
                <?php
                if (empty($_POST['age'])) {
                    echo "Пользователь еще не определился с возрастом";
                } elseif ($_POST['age'] == "30") {
                    echo "Мне больше 30 лет но я не сдамся! Я еще молод и полон сил =)";
                } else {
                    echo "Ваш возраст в диапазоне " . $_POST['age'] . " лет";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Задание - 12</td>
            <td>
                <?php
                /*12.	Создайте html-форму. Спросите у пользователя его возраст с помощью select.
                Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30.*/
                ?>
                <fieldset style="width: 200px">
                    <label title="Выбери себе возраст"><select name="selectAge">
                            <option value="мне 25 лет">мне 25</option>
                            <option value="мне 20-25 лет">20-25</option>
                            <option value="мне 26-30 лет">26-30</option>
                            <option value="мне более 30 лет">более 30</option>
                        </select></label><br>
                </fieldset>
                <?php
                if (empty($_POST['selectAge'])) {
                    echo "Возраст еще не выбран";
                } else {
                    echo $_POST['selectAge'];
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Задание - 13</td>
            <td>
                <?php
                /*13.	Создайте html-форму.
                Спросите у пользователя с помощью элемента multiselect,
                какие из языков он знает: html, css, php, javascript. Выведите на экран те языки, которые знает пользователь.*/
                ?>
                <fieldset style="width: 200px">
                    <label title="Пока что ты можешь!"><select multiple name="selectLanguages[]">
                            <option value="html">html</option>
                            <option value="css">css</option>
                            <option value="php">php</option>
                            <option value="javascript">javascript</option>
                        </select></label><br>
                </fieldset>
                <?php
                if (empty($_POST['selectLanguages'])) {
                    echo "Еще ничего не выбрано";
                } else {
                    $qwe = $_POST['selectLanguages'];
                    foreach ($qwe as $k => $v) {
                        echo "Пользователь выбрал - " . $v . "<br>";
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Задание - 14</td>
            <td>
                <?php
                /*14.	Сделайте функцию, которая создаёт html элемент.
                Функция должна иметь следующие параметры: type, name, value, placeholder.
                В функцию на вход может попасть только input или textarea.
                В любом другом случае необходимо вывести предупреждение об ошибке.*/
                function htmlElements($qwe)
                {
                    if ($qwe == "input") {
                        echo "<input type='text' name='text1' value='text'>" . '<br>';
                    }
                    if ($qwe == "textarea") {
                        echo "<textarea name='text2' placeholder='какой то произвольный текст'></textarea>" . '<br>';
                    }
                    if ($qwe != "input" && $qwe != "textarea") {
                        echo "Мы тут не тем занимаемся, введите или input или textarea ! ! ! Comrade";
                    }
                }

                ?>
                <form method="post">
                    <fieldset style="width: 200px">
                        <?php htmlElements('input') ?>
                        <?php htmlElements('textarea') ?>
                    </fieldset>
                </form>
                <?php
                if (empty($_POST['text1']) && empty($_POST['text2'])) {
                    echo "Введите данные";
                } else {
                    echo $_POST['text1'] . '<br>';
                    echo $_POST['text2'] . '<br>';
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Задание - 15</td>
            <td>
                <?php
                /*15.	Сделайте функцию, которая будет создавать селект. Функция должна принимать многомерный массив, например:
                $arr = array(
                 0=>array('value'=>'php', 'text'=>'Язык PHP'),
                 1=>array('value'=>'html', 'text'=>'Язык HTML') */

                function select($name, $arr)
                {
                    ?>
                    <label><select name="<?php echo $name; ?>">
                            <?php
                            foreach ($arr as $elem) {
                                ?>
                                <option value="<?php echo $elem['value']; ?>"><?php echo $elem['text']; ?></option>
                                <?php
                            }
                            ?>
                        </select></label>
                    <?php
                }

                $arr = array(
                    0 => array('value' => 'php', 'text' => 'Язык PHP'),
                    1 => array('value' => 'html', 'text' => 'Язык HTML'),
                );
                select('select', $arr);
                /*это задание было для меня сложныйм но полезным... пришлось списывать =(
                суть - теги селект и опшн писать не в php а в html, */
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Отправим форму"></td>
        </tr>
    </table>
</form>
</body>
</html>