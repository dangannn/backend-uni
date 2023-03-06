<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>lab1</title>
        <link rel="stylesheet" href="css/styles.css?v=1">
    </head>
    <body>
        <?php
        include('./components/header.php');
        ?>
        <section class="news">
            <h1 class='header__title'>Лабораторная работа 1 - Никоноров Даниил 221-322</h1>
                <?php
                echo "<ul class='news__content'>";
                for ($i = 1; $i <= 10; $i++) {
                    echo "<li class='news__item news-card'>
                                <h3 class='news-card__title'>Web Development</h3>
                                <p class='news-card__text'>Lorem ipsum dolor sit amet consectetur. sit amet</p>
                                <div class='news-card__element'>
                                <span class='news-card__date'>20-12-2022</span>
                                <a href='#' class='news-card__link'>Read more</a>
                              </li>";
                }
                echo "</ul>";
                ?>
        </section>
        <?php
        include('./components/footer.php');
        ?>
    </body>
</html>
