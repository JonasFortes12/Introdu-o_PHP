<?php

$file = new SplFileObject('myBuyList.txt', 'r');

while (!$file->eof()) {
    echo $file->fgets() . PHP_EOL;
}

$date = new DateTime();

$date->setTimestamp($file->getCTime());

echo $date->format('d/m/y');