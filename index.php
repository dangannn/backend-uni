<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>web serv</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php
include('./components/header.php');
?>
<section class='menu'>
    <div class='menu__wrapper container'>
        <h1 class='menu__title'>Список работа:</h1>
        <ul class='menu__list'>
            <li class='menu__item'><a href='./index.php'>Все лабораторные</a></li>
            <li class='menu__item'><a href='./lab1.php'>Лабораторная 1</a></li>
            <li class='menu__item'><a href='lab2-1.php'>Лабораторная 2</a></li>
            <li class='menu__item'><a href='http://portfolio.std-2162.ist.mospolytech.ru/'>Самопрезентация</a></li>
        </ul>
    </div>
</section>
<?php
include('./components/footer.php');
?>
</body>
</html>