<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание_1_5</title>
</head>
<body>
<?php
    define('author',array(
        'М.А Булгаков',
        'Мастер и Маргарита',
        '1966'
    ));
    echo"Обычный вид:<br>";
    echo "<br>Автор: ", author[0];
    echo "<br>Произведение: ", author[1];
    echo "<br>Год издания: ", author[2],"<br>";
    echo "<br>теперь с Pre:";
    echo "<pre>Автор: ", author[0], "\n";
    echo "Произведение: ", author[1], "\n";
    echo "Год издания: ", author[2], "</pre>";
?>
    
</body>
</html>