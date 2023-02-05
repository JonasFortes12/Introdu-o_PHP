<?php

function emailGenerator($nome){

    $emailContent = 'Olá, Erick!
    
    Estamos entrando em contato para informá-lo sobre
    
    {motivo do emaail}
    
    {assinatura}
    
    ';

    //Com o delimitador (Hered) podemos escrever strings de várias linhas
    //  sem se preocupar com a identação do código. Além de possibilitar o uso de variáveis
    $emailContent2 = <<<END
    
    Olá, $nome!
            
    Estamos entrando em contato para informá-lo sobre
            
    {motivo do emaail}
            
    {assinatura}
        
    END;

    //Com o delimitador (Nowdoc) podemos escrever strings de várias linhas
    //  de mo equivalente às aspas simples:
    $emailContent3 = <<<'END'
    
    Olá, $nome!
            
    Estamos entrando em contato para informá-lo sobre
            
    {motivo do emaail}
            
    {assinatura}
        
    END;



    echo $emailContent2;
}


emailGenerator('Erick Vasconcelos');