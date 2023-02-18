<?php

function func1()
{
    echo 'Starting func1 routine' . PHP_EOL;


    try {
        intdiv(7, 0);
    }catch (Error $error){
        echo "An Error detected: " . PHP_EOL . $error . PHP_EOL;
    }

    
    try {
        $array = new SplFixedArray(2);
        $array[4] = 'new element';
    }catch (RuntimeException $error){
        echo "A RuntimeException detected: " . PHP_EOL . $error . PHP_EOL;
    }

    func2();
    echo 'Ending func1 routine' . PHP_EOL;
}

function func2()
{
    echo 'Starting func2 routine' . PHP_EOL;
    for ($i = 0; $i < 5; $i++) echo $i . PHP_EOL;
    echo 'Ending func2 routine' . PHP_EOL;
}

echo 'Starting main routine' . PHP_EOL;
func1();
echo 'Ending main routine' . PHP_EOL;
