<?php
$a = fopen("my_file.html","w");
$text = "Этот текст мы запишем в файл.";
if (fwrite($a,$text))
    echo "Запись прошла успешно";
else
    echo "Произошла ошибка при записи данных.";
fclose($a);
?>
