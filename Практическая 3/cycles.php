<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
    <h1> Практическая №3 </h1>
    <h2> Задание №1 </h2>
    <?php
   $a = 4;
   $b = 2;
   $c = 5;
   echo "a = $a; b = $b; c = $c";
   echo $a < $b ? $a + $b : $a * $b; echo "\n";
   ?>
   <h2> Задание №2 </h2>
   <?php
   $sum = 0; $n = 1;  $ln = 25;
   echo " sum = $sum ; n = $n; ln = $ln";
while($n < $ln) {
    $sum = $sum + $n;
    $n++;
}
echo $sum;
?>
<h2> Задание №3 </h2>
<?php
$n = 1;
$lastNumber  = 10;
$multiplicationResult = 1;
echo "n = $n;  lastNumber= $lastNumber;  multiplicationResult = $ multiplicationResult";
while ($n  <= $lastNumber){
    if ($n % 2 == 0){
        $multiplicationResult = $multiplicationResult * $n;
    }
    $n++;

}
echo  "multiplicationResult  = $multiplicationResult"
?>
<h1> задание №4 </h2>
<?php
echo "Начав тренировки, спортсмен в первый день пробежал 10 км.

Каждый день он увеличивал дневную норму на 10% нормы предыдущего дня. Какой суммарный путь пробежит спортсмен за n дней?";
$a1 = 10;
$n = 12;
$sum = $sum + $a1;
$as = $a1;
for($i =  0; $i < $n; $i++){
    $as = $as +  ($as * 0.1);
    $sum = $sum + $a1;
}
echo "<br> ответ = $sum";
?>