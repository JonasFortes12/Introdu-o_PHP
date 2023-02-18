<?php

$currentDirectory = dir('.');


echo $currentDirectory->path . PHP_EOL;

while ($file = $currentDirectory->read()){
    echo $file . PHP_EOL;
}



