<?php
$result = 0;
if (isset ($_SESSION ['answers'])) {
    $answers = parse_ini_file('answers.ini');
    foreach ($_SESSION ['answers'] as $key => $value) {
        if ($value == $answers[$key]) {
            $result++;
        }
    }
    unset($_SESSION['answers']);
}
?>
<p> Ваш результат <?php echo $result ?> из <?php echo count($questions) ?> </p>
<p><a href="index.php?id=test"> Начать тест сначала</a></p>