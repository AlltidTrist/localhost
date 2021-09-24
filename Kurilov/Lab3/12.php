<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Форма</title>
</head>
<body>
<form method="post" action="handler.php">
    <p>Как вас зовут:</p>
    <input type="text" name="username"></p>
    <p>Ваш любимый цвет:
        <input type="radio" name="favoritecolor" value="r" /> Красный
        <input type="radio" name="favoritecolor" value="g" /> Зелёный
        <input type="radio" name="favoritecolor" value="b" /> Синий </p>
    <input type="submit" value="Отправить" />
</form>
</body>
</html>