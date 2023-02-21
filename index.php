<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab1</title>
    <link rel="stylesheet" href="./lab1.css">
    <link rel="stylesheet" href="./normalize.scss">
</head>
<body>
    <header class="header">
        <a class="header__link"  href=""><img src="img/logo_mospoly.png" alt="logo"></a>
        <h1 class="header__title"  id="h1">Лабораторная работа 1 - Никоноров Даниил 221-322</h1>
    </header>
    <section class="news">
        <ul class="news__content">
            <?php
            for ($i = 1; $i <= 5; $i++) {
                echo "<li class='news__item news-card'>
                    <h3 class='news-card__title'>Web Development</h3>
                    <p class='news-card__text'>Lorem ipsum dolor sit amet consectetur. sit amet</p>
                    <div class='news-card__element'>
                        <span class='news-card__date'>20-12-2022</span>
                        <a href='#' class='news-card__link'>Read more</a>
                </li>";
            }
            ?>
        </ul>
    </section>
    <footer class="footer">
        <p class="footer__title">Никоноров Даниил</p>
    </footer>
</body>
</html>