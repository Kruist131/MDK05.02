<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
    <h1> Практическая №4 </h1>
    <h2> Задание №1 </h2>
    <?php
    $a = 2;
    $b = 5;
    echo "дано: a = $a,  b = $b";
    $res =  $a < $b ? $a + $b : $a * $b;
    echo "<br> результат = $res";
    ?>

    <h2>Задание 2</h2>
    <?php
    $n = 12;
    echo "n = $n";
    $res = $n % 2 == 0 ? 'чётное': 'нечётное';
    echo $res;
    ?>
    <h2>Задание 3</h2>
    <?php
    $sum = 4000;
    echo "sum = $sum";
    $rez = $sum >= 1000? $sum -  ($sum * 0.1): $sum - ($sum % 0.05);
    echo "Итоговая цена = $res";
    ?>
    <h2>Задание 6 </h2>
    <?php
    $a = 60;
    $b = 30;
    echo "Первый угол = $a, Второй угол = $b <br>";
    $test = ($a + $b) >= 180? 'Такого теугольника не сущ': $c  = 180 - $a - $b;
    $res = ($a === 90 || $b === 90 || $c === 90)? 'Треугольник сущ и он прямоугольный': 'Треугольник  сущ, но он не прямоугольный';
    ?>
    <h2>Задание 4</h2>
    <from action="">
        <p> Введите стороны прпямоугольника:</p>
        <input name = "a">
        <input name = "b">
        <input name = "c">
        <input type = "submit" value="Отправить">
        </from>
        <?php
        $a = ($_GET['a']);
        $b = ($_GET['b']);
        $c = ($_GET['c']);
        $result = (($a + $b > $c) && ($b + $c > $a))? "Треугольник сущесивует": "Треугольник не существует";
        echo "ответ - $result";
        ?>
        </html>

        