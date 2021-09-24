<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Заявка</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="Zag">
    <h2>Форма заявки на работу в зоопарке</h2>
    <i>Пожалуйста заполните форму. Обязательные поля помечены<span class="zvezda">*</span></i>
</div>
<form method="post" enctype="multipart/form-data" >
    <div class="forma">
        <fieldset>
            <legend>Контактная информация</legend>
            <div class="contact"><span class="nametext">Имя <span class="zvezda">*</span></span> <input type="text"
                                                                                                        class="stroka"
                                                                                                        name="name">
            </div>
            <div class="contact"><span class="age">Возраст <span class="zvezda">*</span></span> <input type="text"
                                                                                                       class="stroka"
                                                                                                       name="age">
            </div>
            <div class="contact"><span class="emailtext">Email <span class="zvezda">*</span></span> <input type="text"
                                                                                                           class="stroka"
                                                                                                           name="email">
            </div>
            <input type="submit" value="Отправить информацию" class="button">
    </div>
</form>

<?php
echo '<h1>Здравствуйте, ', ($_POST['name']), '! Мы берем на рассмотрение Вашу заявку. Ответ пришлем на Ваш email: ', ($_POST['email']),'<h1>';
?>
</body>
</html>