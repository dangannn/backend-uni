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
include('./components/header.php');
?>
<section class="lab2">
    <div class="container lab2__wrapper">
        <h1 class='header__title'>Лабораторная работа 2 - Никоноров Даниил 221-322</h1>
        <form action="//httpbin.org/post" class="form" method="post" accept-charset="UTF-8 Windows-1251"
              onsubmit="//httpbin.org/post">
            <div class="form__wrapper">
                <h2 class="form__subtitle">Заполните информацию о себе</h2>
                <label class="form__item" for="form-username">
                            <span class="form__text"
                            >Name</span
                            >
                    <input
                            name="username"
                            type="text"
                            class="form__input"
                            placeholder="Иван"
                            id="form-username"
                            required
                    />
                </label>
                <label class="form__item" for="form-email">
                            <span class="form__text"
                            >E-mail</span
                            >
                    <input
                            name="email"
                            type="email"
                            class="form__input"
                            id="form-email"
                            placeholder="mail@mail.ru"
                            required
                    />
                </label>
                <label class="form__item" for="form-gender">
                    <span class="form__text">Request type</span>
                    <select name="gender" class="form__input" id="form-gender">
                        <option value="complaint">complaint</option>
                        <option value="suggestion">suggestion</option>
                        <option value="gratitude">gratitude</option>
                    </select>
                </label>
                <div class="btns__wrapper">
                    <button class="form__reset btn" type="reset">Reset</button>
                    <button class="form__submit btn" type="submit">Submit</button>
                </div>
            </div>
        </form>
        <a class="btn switch__btn" href="lab2-2.php">next page</a>
    </div>
</section>
<?php
include('./components/footer.php');
?>
</body>
</html>
