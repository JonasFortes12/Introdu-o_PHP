<?php

$file = fopen('buyList.txt', 'r');

while(!feof($file)){
    $currentLine = fgets($file);
    echo $currentLine;
}

fclose($file);
