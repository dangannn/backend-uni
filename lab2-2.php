<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab2</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
    <body>
        <?php
        include ('./components/header.php');
        ?>
        <section class='lab2__get-headers get-headers'>
            <h1 class='header__title'>Лабораторная работа 2 - Никоноров Даниил 221-322</h1>
            <div class='get-headers__wrapper container'>
                <h2 class='get-headers__title'>get headers</h2>
                <label>
                    <span class='visually-hidden'>get headers</span>
                    <textarea name='headers' id='headers' cols='50' rows='8'>
                      <?php
                      $url = 'http://httpbin.org/post';
                      print_r(get_headers($url));
                      ?>
                    </textarea>
                </label>
            </div>
        </section>
        <?php
        include ('./components/footer.php');
        ?>
    </body>
</html>
