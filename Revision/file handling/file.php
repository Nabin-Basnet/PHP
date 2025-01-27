<?php
$file=fopen("file.txt","r+");
$content=file_get_contents("file.txt");
// echo $content;
fwrite($file,"hello every one.");
echo $content;
fclose($file);
?>