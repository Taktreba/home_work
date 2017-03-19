<?php
function save_cookie($a, $b)
{
    $x = trim(strip_tags($a));
    $z = trim(strip_tags($b));
    setcookie($x, $z, time() + 300);
}

if (empty($_POST['new_cookie']) && empty($_POST['new_value'])) {
    echo 'Тут будут выводиться созданые cookie' . '<br>';
} else {
    save_cookie($_POST['new_cookie'], $_POST['new_value']);
    print_r($_COOKIE);
}



?>
<p><b><i>Ликбез</i></b> - форма для создания, редактирования и удаление cookie. Срок жизни cookie 5 минут.<br><i>Создание:</i>
    Для создане
    cookie введите имя и значение
    в
    соответствующие поля формы.<br><i>Редактирование:</i> Для редактирования cookie введите в форму имя куки которую
    хотите
    заменить и ee новое значение. <br><i>Удаление:</i> Для удаления cookie введите имя cookie в поле формы которую
    хотите
    удалить, а поле значение оставте <u>пустым</u></p>
<form action="" method="post">
    <label><input type="text" name="new_cookie">Имя куки</label><br>
    <label><input type="text" name="new_value">Значение куки</label><br>
    <input type="submit" value="Submit" name="save_cookie"><br>
</form>

<!--<form action="" method="GET">-->
<!--    <label><input type="text" name="updateName">Имя изменяемой куки</label><br>-->
<!--    <label><input type="text" name="updateValue">Значение изменяемой куки</label><br>-->
<!--    <input type="submit" value="Изменить!" name="edit_cookie"><br>-->
<!--</form>-->
<!--<form action="" method="GET">-->
<!--    <label><input type="text" name="deleteName">Удалить куку</label><br>-->
<!--    <input type="submit" value="Удалить!" name="del_cookie"><br>-->
<!--</form>-->
<a href="DZ-7_index.php">index.php</a>