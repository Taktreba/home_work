<?php
if (!empty($_POST['save_cookie'])) {
    setcookie($_POST['save_cookie'], $_POST['save_cookie']);
}
if(!empty($_POST['del_cookie'])) {
    setcookie($_POST['del_cookie'], '', time());
}
if(!empty($_POST['edit_cookie']) && !empty($_POST['edit_value'])) {
    setcookie($_POST['edit_cookie'], $_POST['edit_value']);
}


echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";
?>
<br>
<br>
<br>
<form method="post" action="">
    <label><input type="text" name="save_cookie">Сохранение(создание) новой куки</label><br>
    <label><input type="submit" name="submit"></label><br>
</form>
<form method="post" action="">
    <label><input type="text" name="edit_cookie">Какую куку хотим заменить</label><br>
    <label><input type="text" name="edit_value">на что меняем куку</label><br>
    <label><input type="submit" name="submit"></label><br>
</form>
<form method="post" action="">
    <label><input type="text" name="del_cookie">Удаление куки</label><br>
    <label><input type="submit" name="submit"></label><br>
</form>

<a href='DZ-7_index.php'>Возврат на index.php</a>"