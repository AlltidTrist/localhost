<?php
$db = mysqli_connect("localhost","dkurilov","qSjR22","dkurilov_firma");
$result = mysqli_query($db, "INSERT INTO firma (name, lastname, dol) VALUES ('Андрей', 'Андреев', 'Водитель')");
if ($result == true)
    echo "Информация в базу добавлена успешно";
else
    echo "Информация в базу не добавлена ";
?>