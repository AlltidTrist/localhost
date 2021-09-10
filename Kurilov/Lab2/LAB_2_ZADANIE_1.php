<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Создание PHP-скриптов</title>
</head>
<body>
<?php
$name = [
    0=> 'Саша',
    1=> 'Маша',
    2=> 'Ваня',
    3=> 'Аня',
    4=> 'Костя'
];
echo $name[2],'<br/>', $name[1],'<br/>', $name[0],'<br/>',$name[5]. '<br/>';
?>
</body>
</html>