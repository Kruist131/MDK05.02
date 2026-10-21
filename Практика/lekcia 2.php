<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2> Вложенные циклы </h2>
<?php
for ( $i = 0; $i < 5; $i++){
  for(  $j  = 0; $j <  10; $j++){
    echo 'Q';
  }   
  echo '<br>';
}
?>
<h2> break и continue</h2>
<p>break - прерывает цикл и вызодит зп его пределы</p>
<p>continue - прерывает текущую итерацию и переходит к проверке условия</p>

<?php

