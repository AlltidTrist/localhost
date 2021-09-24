<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Создание PHP-скриптов</title>
</head>
<body>
<?php
$a = 2;
$b = 3;
$iden = +$a;
$otricanie = -$a;
$slozh = $a + $b;
$raz = $a - $b;
$sum = $a * $b;
$del = $a / $b;
$del_po_mod = $a % $b;
$step = $a ** $b;
echo $a, " - Первое число", "</br>";
echo $b, " - Второе число", "</br>";
echo $iden, " - Идентичность", "</br>";
echo $otricanie, " - Отрицание", "</br>";
echo $slozh, " - Сложение", "</br>";
echo $raz, " - Вычитание", "</br>";
echo $sum, " - Умножение", "</br>";
echo $del, " - Деление", "</br>";
echo $del_po_mod, " - Деление по модулю", "</br>";
echo $step, " - Возведение в степень", "</br>";
?>
</body>
</html>
