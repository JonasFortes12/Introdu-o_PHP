<?php

function func1()
{
    echo 'Starting func1 routine' . PHP_EOL;

    try {
        func2();
    } catch (Throwable $error) {
        echo <<<TEXT
            ________________Log________________
            Message: '{$error->getMessage()}' on func2 treat into func1
            Line: {$error->getLine()}
            Execution Stack: 
        {$error->getTraceAsString()}
            ___________________________________
        TEXT. PHP_EOL;
    }

    echo 'Ending func1 routine' . PHP_EOL;
}

function func2()
{
    echo 'Starting func2 routine' . PHP_EOL;

//    $exception = new DomainException();
    $exception = new DivisionByZeroError();
    throw $exception;

    echo 'Ending func2 routine' . PHP_EOL;
}

echo 'Starting main routine' . PHP_EOL;
func1();
echo 'Ending main routine' . PHP_EOL;

