<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1> Практическая работа  2 </h1>
    <h2> Задание 1 </h2>
    <?php
        $a = 20;
        $b = 10;
        $c = 6;
        $d = 25;
        $rez = ($a / $c) * ($b / $d) - (($a * $b - $c) / ($c * $d));
        echo  "a = $a, b = $b, c = $c, d = $d, результат = $rez"
    ?>
<h2> Задание 2 </h2>
    <?php
        $x = 56;
        $y = 15;
        $rezu = (($x + $y) / ($y + 1)) - (($x * $y - 12) / (34 + $x));
        echo  "x = $x, y = $y, результат = $rezu"
    ?>
<h2> Задание 3 </h2>
<?php
$x  = 2;
$y  = 2;
$rezu = (($x + 1) / ($x - 1)) ** $x + (18 * $x * $y ** 2);
echo  "x = $x, y = $y, результат = $rezu"
?>
<h2> Задание 4 </h2>
<?php
$x =2;
$y =9;
$rez = (1 + (1 / $x ** 2)) ** $x - (12 * $x ** 2 * $y);
echo "x = $x, y = $y, результат = $rez"
?>
</body>
</html>
