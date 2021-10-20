<?php
$a = fopen("my_file.html","r");
while (!feof ($a)) {
    $content = fgetss($a);
    echo $content,"<br>";
}
fclose($a);
?>