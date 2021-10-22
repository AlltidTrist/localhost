<!DOCTYPE HTML PUBLIC "-I/W3C//DTD HTML 4.01//EN// www.w3.org/TR/html4/strict.dtd ">
<html lang="ru">
<head>
    <title>Загрузка изображения с изменением размеров</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<h1>Загрузка изображения с изменением размеров</h1>
<?php
// Пути загрузки файлов
$path = 'if';
$tmp_path = 'tmp/';
// Массив допустимых значений типа файла
$types = array('image/gif', 'image/png', 'image/jpeg','image/jpg');
// Максимальный размер файла
$size = 1024000;
// Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST')
// Проверяем тип файла
    if (!in_array($_FILES['picture']['type'], $types))
        die('<p>Запрещённый тип файла. <a href="?">Попробовать другой файл?</a></p>');
// Проверяем размер файла
if ($_FILES['picture']['size'] > $size)
    die('<p>Слишком большой размер файла. <a href="?">Попробовать другой файл?</a></p>');
// Функция изменения размера
// Изменяет размер изображения в зависимости от type:
// type = 1 - эскиз
// type = 2 - большое изображение
// rotate - поворот на количество градусов (желательно использовать значение 90, 180, 270)
// quality - качество изображения (по умолчанию 75%)
require_once __DIR__ . '/Thumbs.php';

$image = new Thumbs(__DIR__ . '/image.png');
$image->reduce(2000, 2000);
$image->save();


$image = new Thumbs(__DIR__ . '/image.png');
$image->thumb(300, 200);
$image->output();


?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="picture">
    <br>
    <label>Тип загрузки</label>
    <br>
    <select name="file_type">
        <option value="1">Эскиз</option>
        <option value="2">Большое изображение</option>
    </select>
    <br>
    <label>Поворот на кол-во градусов:</label>
    <br>
    <input type="text" name="file_rotate">
    <br>
    <input type="submit" value="Загрузить">
</form>
</body>
</html>
