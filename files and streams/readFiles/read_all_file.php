<?php

$file = fopen('buyList.txt', 'r');

//get just 128bytes of characters:
$content = fread($file, '128');//get just 128bytes of characters
//get all file content by length:
$content2 = fread($file, filesize('buyList.txt'));
//to get all file contents:
$content3 = file_get_contents('buyList.txt');
//to get all file content as elements of an array:
$content4 = file('buyList.txt');

echo PHP_EOL . $content3;
var_dump($content4);





fclose($file);

