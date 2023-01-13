<?php

/*
    Para importar/incluir um arquivo de código externo. Utilizamos: include "/nomearquivo.php"

    Se a importação for obrigatóri, usa-se: require "/nomearquivo.php

    E se for obrigatória garantido somente uma importação no arquivo,
    usamos: require_once "/nomearquivo.php

 * */

require_once "funcoes.php";

$contasCorrente = [
    '190.478.987-65' => [
        'titular' => 'James Web',
        'saldo' => 9000
    ],
    '190.478.984-81' => [
        'titular' => 'Luzia Sousa',
        'saldo' => 80000
    ],
    '190.472.987-72' => [
        'titular' => 'Isac Alpino',
        'saldo' => 11000
    ]
];

$contasCorrente['190.478.987-65'] = sacar($contasCorrente['190.478.987-65'], 100);
$contasCorrente['190.472.987-72'] = depositar($contasCorrente['190.472.987-72'], 450);

toUpperName($contasCorrente['190.478.984-81']);


?> //fechamento da área de código PHP

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes:</h1><br>

    <dl>
        <?php foreach ($contasCorrente as $cpf => $conta){?>
        <dt>
            <h3> <?php echo "Titular: {$conta['titular']} CPF: $cpf"; ?>  </h3>
        </dt>
        <dd>
           <h4><?php echo "Saldo: {$conta['saldo']}"; ?></h4>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>

