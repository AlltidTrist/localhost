<?php
$text = fopen('laba6text.txt','w');
$text1 = file_get_contents('lab6.php');
if (fwrite($text,$text1))
    echo "Запись прошла успешно";
else
    echo "Произошла ошибка при записи данных.";
?>
