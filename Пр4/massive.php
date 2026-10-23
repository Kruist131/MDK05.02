<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
    <h1> Пр 4 </h1>
    <h2> Задание №1 </h2>
    <?php
$arr1 = [5, 2, 9, -3, 7, 1];
$max = $arr1[0];
$min = $arr1[0];
$imax = 0;
$imin = 0;
foreach ($arr1 as $key => $value) {
    if ($value > $max) {
        $max = $value;
        $imax = $key;
    }
    if ($value < $min) {
        $min = $value;
        $imin = $key;
    }
}
 echo "max = $max (индекс $imax), min = $min (индекс $imin)\n";

?>
<h2>Задание 2</h2>
<?php
$arr2 = [3, 4, 2, 5];
$sum = 0;
$prod = 1;
foreach ($arr2 as $value) {
    $sum = $sum + $value;
    $prod = $prod * $value;
}
 echo " сумма = $sum, произведение = $prod\n";

?>
<h2>Задание 3</h2>
<?php
$arr3 = [4, 8, 2, 6];
$sum = 0;
$count = 0;
foreach ($arr3 as $value) {
    $sum = $sum + $value;
    $count = $count + 1;
}
$avg = $sum / $count;
echo " среднее = $avg\n";
?>
<h2>Задание 4</h2>
<?php
$start = [1.5, -2.5, 3.0, -4.0, 0.0];
$potom = [];
foreach ($start as $value) {
    if ($value > 0) {
        $potom[] = $value * $value;
    } elseif ($value < 0) {
        if ($value < 0) {
            $potomm[] = -$value;
        }
    } else {
        $potom[] = $value;
    }
}
echo " исходный: ";
foreach ($start as $value) echo "$value ";
echo "новый: ";
foreach ($potom as $value) echo "$value ";

?>
<h2>Задание 5</h2>
<?php


$a = [10, 20, 30 , 14, 2, 8];
echo "Чётные по позиции в массиве числа:";
foreach ($a as $key => $value) {
    if ($key % 2 == 0) {
        echo "$value ";
    }
}

?>
<h2>Задание 6 </h2>
<?php
$mas = [1, 3, 2, 5, 4, 7];
echo " ";
$prev = $mas[0];
foreach ($mas as $key => $value) {
    if ($key > 0) {
        if ($value > $prev) {
            echo "$value ";
        }
        $prev = $value;
    }
}
echo "- Числа большие, чем предыдущие им";
?>
<h2>Задание 7</h2>
<?php
$cis = [1, 2, 3, 4, 5];
$res7 = [];
$i = 0;
foreach ($cis as $key => $value) {
    if ($key % 2 == 0) {
        if (isset($arr7[$key + 1])) {
            $res7[] = $cis[$key + 1];
            $res7[] = $value;
        } else {
            $res7[] = $value;
        }
    }
}

foreach ($res7 as $value) echo "$value ";
echo "- Результат";

?>
<h2> Задание 8 </h2>
<?php
$arr = [1, 2, 3, 4, 5];
$res8 = [];
$last = $arr[count($arr) - 1];
$res8[] = $last;
foreach ($arr as $key => $value) {
    if ($key < count($arr) - 1) {
        $res8[] = $value;
    }
}
echo " ";
foreach ($res8 as $value) echo "$value ";
echo "- Результат";
?>
<h2> Задание 9</h2>
<?php
$arr9 = [1, 2, 1, 3, 2, 1];
$pairs = 0;
$n = count($arr9);
$used = [];
foreach ($arr9 as $key => $value) {
    if (!isset($used[$key])) {
        foreach ($arr9 as $key2 => $value2) {
            if ($key2 > $key && !isset($used[$key2])) {
                if ($value == $value2) {
                    $pairs = $pairs + 1;
                    $used[$key] = 1;
                    $used[$key2] = 1;
                    break;
                }
            }
        }
    }
}
echo "Количество пар: = $pairs\n";
?>

