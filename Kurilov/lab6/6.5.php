<?php
$a = fopen("my_file.html","r+");
$content = fgets($a,2);
fclose($a);
echo $content;
?>