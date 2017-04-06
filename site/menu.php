<?php
$menus = [
    'multi' => 'Таблица умножения',
    'calc' => 'Калькулятор',
    'test' => 'Тест',
    'users' => 'users'
]; ?>
<nav>
    <ul>
        <?php foreach ($menus as $key => $menu): ?>
            <li>
                <a href="index.php?id=<?php echo $key; ?>"><?php echo $menu; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
