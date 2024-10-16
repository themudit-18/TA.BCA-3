<?php
$file = fopen("result.csv","a+");
$text = fread($file,filesize("result.csv"));
echo "<pre>";
echo $text;
echo "</pre>";
fclose($file);
?>
