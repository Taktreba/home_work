<p> Тест содержит 4 вопроса. </p>
<h3> Начать Quiz </h3>
<form action="index.php?id=test" method="post">
    <input type="hidden" name="question" value=" <?php echo ++$question; ?> ">
    <input type="submit">
</form>