<?php
$nome = 'CPF/> <script>alert("Ataque hacker!")<script/>'
?>
/*
    'htmlentities($nome)' converte os characteres para serem lidos de modo literal no
    html, impedindo assim que seja injetado códigos maliciosos (cross-site scripting) na estrada $nome, se tal
    variável fosse um input de usuário.
*/


<input type="text" name="<?php echo htmlentities($nome) ?>"/>




