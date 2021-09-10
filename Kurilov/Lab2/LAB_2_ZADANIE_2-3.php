<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Создание PHP-скриптов</title>
</head>
<body>
<?php
$auto = [];
$auto['bmw'] = [
    'model' => 'x5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2006
];
$auto['toyota'] = [
    'model' => 'Carina',
    'speed' => 130,
    'doors' => 4,
    'year' => 2007
];
$auto['opel'] = [
    'model' => 'Corsa',
    'speed' => 140,
    'doors' => 4,
    'year' => 2007
];
echo 'BMW - ', $auto['bmw']['model'],' - '.$auto['bmw']['speed'],' - '.$auto['bmw']['doors'],' - '.$auto['bmw']['year'],'<br/>';
echo 'Toyota - ', $auto['toyota']['model'],' - '.$auto['toyota']['speed'],' - '.$auto['toyota']['doors'],' - '.$auto['toyota']['year'],'<br/>';
echo 'Opel - ', $auto['opel']['model'],' - '.$auto['opel']['speed'],' - '.$auto['opel']['doors'],' - '.$auto['opel']['year'];
?>
</body>
</html>