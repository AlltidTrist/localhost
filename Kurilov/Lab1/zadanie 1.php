<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Создание PHP-скриптов</title>
</head>
<body>
<?php
$a=1;
$b=2;
$c=3;
$kvad=2;
$kub=3;
$a2= $a ** $kvad;
$a3= $a ** $kub;
$b2= $b ** $kvad;
$b3= $b ** $kub;
$c2= $c ** $kvad;
$c3= $c ** $kub;
$raz = $a3 - $a2;//РАЗНОСТЬ 1 в кубе и 1 в квадрате
$raz2 = $b3 - $b2;//РАЗНОСТЬ 2 в кубе и 2 в квадрате
$raz3 = $c3 - $c2;//РАЗНОСТЬ 3 в кубе и 3 в квадрате
$umn = $a3 * $a2;//СУММА 1 в кубе и 1 в квадрате
$umn2 = $b3 * $b2;//СУММА 2 в кубе и 2 в квадрате
$umn3 = $c3 * $c2;//СУММА 3 в кубе и 3 в квадрате
$del = $a3 / $a2;//ДЕЛЕНИЕ 1 в кубе и 1 в квадрате
$del2 = $b3 / $b2;//ДЕЛЕНИЕ 2 в кубе и 2 в квадрате
$del3 = $c3 / $c2;//ДЕЛЕНИЕ 3 в кубе и 3 в квадрате
echo $raz," Разность 1 в кубе и 1 квадрате","</br>";
echo $raz2," Разность 2 в кубе и 2 квадрате","</br>";
echo $raz3," Разность 3 в кубе и 3 квадрате","</br>";
echo $umn," Сумма 1 в кубе и 1 квадрате","</br>";
echo $umn2," Сумма 2 в кубе и 2 квадрате","</br>";
echo $umn3," Сумма 3 в кубе и 3 квадрате","</br>";
echo $del," Деление 1 в кубе и 1 квадрате","</br>";
echo $del2," Деление 2 в кубе и 2 квадрате","</br>";
echo $del3," Деление 3 в кубе и 3 квадрате","</br>";
?>
</body>
</html>
