<?php
$n = @readfile("my_file1.html");
/* выводит на экран содержимое файла и записывает его размер в
переменную $n */
if (!$n) echo "Error in readfile";
/* если функция readfile() выполнилась с ошибкой, то $n=false и выводим сообщение об ошибке*/
else echo $n;
// если ошибки не было, то выводим число
// считанных символов
?>