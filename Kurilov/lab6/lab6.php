<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Заявка</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="Zag">
    <h1>Форма заявки на работу в зоопарке</h1>
    <i>Пожалуйста заполните форму. Обязательные поля помечены<span class="zvezda">*</span></i>
</div>
<div class="forma">
    <fieldset>
        <legend>Контактная информация</legend>
        <div class="contact"><span class="nametext">Имя <span class="zvezda">*</span></span> <input type="text"
                                                                                                    class="stroka">
        </div>
        <div class="contact"><span class="phonetext">Телефон</span><input type="text" class="stroka"></div>
        <div class="contact"><span class="emailtext">Email <span class="zvezda">*</span></span> <input type="text"
                                                                                                       class="stroka">
        </div>
    </fieldset>
</div>
<div class="forma">
    <fieldset>
        <legend>Персональная информация</legend>
        <div class="forma">
            <div class="contact"><span class="age">Возраст <span class="zvezda">*</span></span> <input type="text"
                                                                                                       class="stroka">
            </div>
            <div class="contact"><span class="sex">Пол </span>
                <select name="select">
                    <option>Женский</option>
                    <option>Мужской</option>
                </select>
            </div>
            <div class="contact">
                <span class="cach">Перечислите личные качества</span><textarea></textarea>
            </div>
        </div>
    </fieldset>
</div>

<div class="forma">
    <fieldset>
        <legend>Выберите ваших любимых животных</legend>
        <div class="zhiv">
            <div class="chek"><input type="checkbox" class="animal"><span>Зебра</span></div>
            <div class="chek"><input type="checkbox" class="animal"><span>Слон</span></div>
            <div class="chek"><input type="checkbox" class="animal"><span>Кошка</span></div>
            <div class="chek"><input type="checkbox" class="animal"><span>Антилопа</span></div>
            <div class="chek"><input type="checkbox" class="animal"><span class="">Собака</span></div>
            <div class="chek"><input type="checkbox" class="animal"><span>Попугай</span></div>
            <div class="chek"><input type="checkbox" class="animal"><span>Лев</span></div>
            <div class="chek"><input type="checkbox" class="animal"><span>Кролик</span></div>
        </div>
    </fieldset>
    <input type="button" value="Отправить информацию" class="button">
</div>
</body>
</html>
<?php
$a = fopen("my_file.html","w");
?>
