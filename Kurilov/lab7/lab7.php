<?php

/*
 * Пример 1

$result = mysqli_query($db, "SELECT * FROM firma");
$myrow = mysqli_fetch_array($result);
echo $myrow["name"];
echo $myrow["dol"];
*/
/*
 * Пример 2

$result = mysqli_query($db, "SELECT * FROM firma");
$myrow = mysqli_fetch_array($result);
echo $myrow["lastname"];
*/
/*
 * Пример 3

$result = mysqli_query($db, "SELECT * FROM firma WHERE id = 2");
$myrow = mysqli_fetch_array($result);
echo $myrow["lastname"];
*/
/*
 * Пример 4
$result = mysqli_query($db, "SELECT * FROM firma WHERE id = 2");
$myrow = mysqli_fetch_array($result);
echo $myrow["dol"];
 */
/*
 * Пример 5

$db = mysqli_connect("localhost","dkurilov","qSjR22","dkurilov_firma");
$result = mysqli_query($db, "SELECT * FROM firma");
while ($row = mysqli_fetch_row($result))
{
echo 'Сотрудник - № ' . $row['id'] . '<br />';
echo $row['name'] . '<br />';
echo $row['lastname'] . '<br />';
echo $row['dol'] . '<br />';
echo '<hr />';
}
 */
/*
 * Пример UPDATE
$db = mysqli_connect("localhost","dkurilov","qSjR22","dkurilov_firma");
$result = mysqli_query($db,"UPDATE `firma` SET `name` = 'Егор', `lastname` = 'Егоров' WHERE `id` = '2'");
if ($result == true)
    echo "Информация в базу обновлена успешно";
else
    echo "Информация в базу не обновлена";
*/
/*
 * Пример 8
$db = mysqli_connect("localhost","dkurilov","qSjR22","dkurilov_firma");
$result = mysqli_query($db,"DELETE FROM `firma` WHERE `id` = '9'");
if ($result == true)
    echo "Информация из базу удалена успешно";
else
    echo "Информация из базу не удалена";
 */
?>


