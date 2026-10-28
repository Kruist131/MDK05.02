<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практическая работа: Ассоциативные массивы</title>
</head>
<body>
<h1>Практическая №4 "Ассоциативные массивы" </h1>
    <h2>Задание №1</h2>
    <?php

    $dictionary = [
        'monday' => 'понедельник',
        'tuesday' => 'вторник',
        'wednesday' => 'среда',
        'thursday' => 'четверг',
        'friday' => 'пятница',
        'saturday' => 'суббота',
        'sunday' => 'воскресенье',
        'apple' => 'яблоко',
        'book' => 'книга',
        'dog' => 'собака'
    ];

    foreach ($dictionary as $eng => $rus) {
        echo "$eng - $rus <br>";
    }
    ?>
      <h2>Задание №2</h2>
    <?php

    $search_word = 'пятница'; 
    
    echo "<p>Ищем перевод для слова: <b>$search_word</b></p>";

    $eng_word = array_search($search_word, $dictionary);

    if ($eng_word !== false) {
        echo "Найдено: $eng_word - $search_word <br>";
    } else {
        echo "Слово '$search_word' в словаре не найдено. <br>";
    }
    ?>
    <h2>Задание №3</h2>
    <?php
  $search_word = 'apple'; 
    echo "<p> Слово для перевода: <b>$search_word</b> </p>";
    if (array_key_exists($search_word, $dictionary)) {
        $translation = $dictionary[$search_word];
        echo "Перевод (eng -> rus): $search_word - $translation <br>";
    } 
    else {
         $eng_key = array_search($search_word, $dictionary);
        if ($eng_key !== false){
            echo "Перевод (eng -> rus): $eng_key - $search_word  <br>";
        }
        else {
        echo "Слово 'search_word' в словаре не найдено. <br>";
      }
      }
       ?>
    <h2>Зданаие №4</h2>
    <form action="">
        <p>Введите слово:</p>
        <input name = "word">
        <input type = "submit" value = "Отправить">
</form>
    <?php
 $search_word = $_GET['word'];
 $eng_key = 0;
 foreach($dictionary as $key => $ru){
    if ($search_word  == $ru){
        echo "$ru - $key";
        $eng_key++;
        break;
       }
        elseif ($search_word == $key){
            echo "$key -  $ru";
            $eng_key++;
            break;
        }
 }
if ($eng_key == 0){
echo "такого слова нет в словаре";
}
    ?>
            <h2>Задание №5 </h2>
<?php 
$str = "banana";
echo  "Слово - banana <br>";
$arr = [];
$len = strlen($str);
for($i = 0; $i < $len; $i++){
    $ch = $str[$i];
    if(isset($arr[$ch])){
        $arr[$ch] = $arr[$ch] + 1;
    }
    else {
$arr[$ch] = 1;
    }
    
}
foreach($arr as $bukva => $count){
    echo "$bukva => $count<br>";
}
?>
<h2>Задание 6</h2>

</body>
</html>
