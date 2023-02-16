<?php

$content1 = file_get_contents('zip://lists.zip#myBuyList.txt');
$content2 = file_get_contents('zip://lists.zip#buyList.txt');

echo $content1 . PHP_EOL;
echo $content2 . PHP_EOL;
