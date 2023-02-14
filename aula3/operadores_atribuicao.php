<h2>Operadores de atribuição</h2>

<p>
    São utilizados para armazenar
    "atribuir valores a uma variável".
</p>

<ol>
    <li>=  | atribuição simples</li>
    <li>+= | acumula um novo valor</li>
    <li>-+ | subtrai o valor da variável</li>
    <li>++ | incrementa 1 ao valor da variável</li>
    <li>-- | subtrai 1 do valor da variável</li>
    <li>.= | concatena o texto ao valor da variável</li>
</ol>

<strong>Exemplos</strong>
<?php
    $nota = 5; //atribui o número 5 na variável nota
    echo $nota; //imprime o número 5

    $nota += 5; //soma + 5 na variável nota - $nota = $nota + 5;
    echo $nota; //imprime o número 10 (5 de antes + 5 de agora)

    $nota -= 2; //Equivale a $nota = $nota - 2;
    echo $nota; //imprime o valor 8

    $nota++; //soma 1 ao valor da variável = $nota = $nota + 1;
    echo $nota; //imprime o valor 9

    $nota--; //subtrai 1 do valor da variável = $nota = $nota - 1;
    echo $nota; //imprime o valor 8

    $nome = "Ivan";
    $nome .= "Pereira"; //concatena o valor anterior Ivan, com
                        //o novo valor Pereira e armazena na
                        //variável nome
    echo $nome; //imprime Ivan Pereira
?>