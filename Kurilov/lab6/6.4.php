<?php
$a = fopen("my_file.html","r+");
$content = fread($a,filesize("my_file.html"));
fclose($a);
echo $content;
?>