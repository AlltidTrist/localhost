<?php
$a = fopen("my_file.html","a");
$add_text = "Добавим текст в файл";
if (fwrite($a,$add_text,7))
    echo "Добавление текста прошло успешно";
else
    echo "Произошла ошибка при добавлении данных.";
fclose($a);
?>
