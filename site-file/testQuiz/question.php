<form action="index.php?id=test" method="post">
    Вопрос: <?php echo $questions [$question]['title'] ?> <br/>
    Ответы: <br/>
    <?php $answers = $questions [$question]['answers']; ?>
    <?php shuffle($answers) ?>
    <?php foreach ($answers as $item): ?>
        <?php echo $item ?> <label><input type="radio" name="answer" value="<?php echo $item ?>"></label><br/>
    <?php endforeach; ?>
    <br/><br/>
    <input type="hidden" name="question" value=" <?php echo $question; ?> ">
    <input type="submit">
</form>