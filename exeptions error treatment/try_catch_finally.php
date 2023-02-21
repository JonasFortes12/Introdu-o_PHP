<?php

function a(): int
{
    try {
        echo 'code ...' . PHP_EOL;
        throw new Exception();
    } catch (Exception) {
        echo 'treatment' . PHP_EOL;
        } finally { // this block is ever executed
        echo 'more code' . PHP_EOL;
        return 1;
    }
}

echo a();



