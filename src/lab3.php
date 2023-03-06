<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab3</title>
    <link rel="stylesheet" href="css/styles.css?v=1">
</head>
<body>
<?php
include('./components/header.php');
?>
<form action="lab3.php" class="form">
    <div class="form__wrapper">
        <label for='equation' class="form__item">
            <span class="form__text">Enter equation:</span>
            <input class="form__input" name='equation' type='text' placeholder="123+x=127">
        </label>
        <button type='submit' class="btn">Solve</button>
    </div>
</form>
<?php
if (isset($_GET['equation']) && stristr($_GET['equation'], '=')) {
    $equation = $_GET['equation'];
    $firstNumber = '';
    $op = '';
    $answer = 0;
    $numb = explode("=", $equation);
    if ($numb[0][-2] == '+') {
        $answer = floatval($numb[1]) - floatval(substr($numb[0], 0, -2));
    } else if ($numb[0][-2] == '-') {
        $answer = floatval($numb[1]) + floatval(substr($numb[0], 0, -2));
    }
    else if ($numb[0][-2] == '*') {
        $answer = floatval($numb[1]) / floatval(substr($numb[0], 0, -2));
    } else if ($numb[0][-2] == '/') {
        $answer = floatval($numb[1]) * floatval(substr($numb[0], 0, -2));
    }
    echo "
        <span class='answer answer--r'>Answer: {$answer}</span>
    ";
} else {
    echo "
        <span class='answer answer--w'>Incorrect equation, does not contain an equal sign</span>
    ";
}
?>
<?php
include('./components/footer.php');
?>
</body>
</html>
