l<?php
switch ($_GET ['Tovar'] [0]) {
    case "Б":
        $sum = $_GET['K'] * 20;
    case "К":
        $sum = $_GET['K'] * 15;
    case "M":
        $sum = $_GET['K'] * 10;
}
if ($_GET['DK'] == "on") {
    $sum = $sum - $sum * 0.05;
    echo "Вы получаете скидку в размере 5 %";
}
?>
<html>
<head>
</head>
<body>
<p> Сумма покупки: <?php echo $sum; ?> у.e. </p>
</body>
</html>