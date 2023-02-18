<?php

function func1()
{
    echo 'Starting func1 routine' . PHP_EOL;
    try {
        func2();
    } catch (RuntimeException|DivisionByZeroError $error) {
        if (is_a($error, 'RuntimeException')) {
            $message = "'{$error->getMessage()}' on func2 treat into func1";
        } elseif (is_a($error, 'DivisionByZeroError'))
            $message = "'{$error->getMessage()}' on func2 treat into func1";

        echo $show = <<<TEXT
            ________________Log________________
            Message: {$message}
            Line: {$error->getLine()}
            Execution Stack: 
        {$error->getTraceAsString()}
            ___________________________________
        TEXT . PHP_EOL;

    }

    echo 'Ending func1 routine' . PHP_EOL;
}

function func2()
{
    echo 'Starting func2 routine' . PHP_EOL;

    $array = new SplFixedArray(2);
    $array[4] = 'new element';
    intdiv(7, 0);

    for ($i = 0; $i < 5; $i++) echo $i . PHP_EOL;

    echo 'Ending func2 routine' . PHP_EOL;
}

echo 'Starting main routine' . PHP_EOL;
func1();
echo 'Ending main routine' . PHP_EOL;
