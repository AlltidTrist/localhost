<?php
$first = 18;
$last = 40;
if ($_POST['age']<$first)
    die('<h1>Вы слишкоим молоды :(</h1>');
elseif ($_POST['age']>$last)
    die('<h1>Извините, вы нам не подходите :(</h1>');
else
    die('<h1>Вы приняты :)</h1>');
?>



