<?php
session_start();
// ----------- блок добавляющий подсчет кол-ва секунд проведенных на сайте
$sec = 0;
if (!isset($_SESSION['date'])) {
    $_SESSION['date'] = date('Y-m-d H:i:s');
} else {
    $sec = time() - strtotime($_SESSION['date']);
}
//-----

// блок подсчитывающий количество заходов юзера на сайт
if(!isset($_SESSION['visitorCount'])) {
    $_SESSION['visitorCount'] = 0;
}
else {
    $_SESSION['visitorCount']++;
}

// блок определящий последний визит на сайт
$lastVisit = time();
if (isset($_COOKIE['$lastVisit'])) {
    $lastVisit = $_COOKIE['$lastVisit'];
}

if (date('d.m.Y H:i', $lastVisit) != date('d.m.Y H:i')) {
    setcookie('lastVisit', $lastVisit, time() + 3600);
}


setcookie('$lastVisit', $lastVisit, time() + 3600);

$lastVisit = date('d.m.Y H:i', $lastVisit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        div.container {
            width: 100%;
            border: 1px solid gray;
        }

        header, footer {
            padding: 1em;
            color: white;
            background-color: #931ac7;
            clear: left;
            text-align: center;
        }

        header {
            text-align: left;
        }

        header a {
            color: white;
            text-decoration: none;
        }

        nav {
            float: left;
            max-width: 160px;
            margin: 0;
            padding: 25px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            padding-bottom: 20px;
        }

        nav ul a {
            text-decoration: none;
        }

        article {
            margin-left: 170px;
            border-left: 1px solid gray;
            padding: 1em;
            overflow: hidden;
        }
    </style>
</head>
<body>
<?php
$id = '';
if (!empty($_GET)) {
    $id = empty($_GET['id']) ? '' : trim(strip_tags($_GET['id']));
}
$blocks = ['header', 'content', 'footer'];

?>
<div class="container">
    <?php foreach ($blocks as $block): ?>
        <?php if ($block == 'header'): ?>
            <?php include 'header.php'; ?>
        <?php elseif ($block == 'content'): ?>
            <?php include 'menu.php'; ?>
            <article>
                <?php
                switch ($id) {
                    case 'multi':
                        include 'multi.php';
                        break;
                    case 'calc':
                        include 'calc.php';
                        break;
                    case 'test':
                        include 'testQuiz/index.php';
                        break;
                    case 'sing_up':
                        include 'checkin/sign_up.php';
                        break;
                        case 'users':
                        include 'users.php';
                        break;
                    default:
                        include 'default.php';
                        break;
                }
                ?>

            </article>
        <?php elseif ($block == 'footer'): ?>
            <?php include 'footer.php'; ?>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
</body>
</html>
