<?php

    $valor = 0;
    $total = 0;

    do
    {
        $total += $valor;
        $valor = (int) readline("Valor: R$");

    } while ($valor != 0);

    echo "VALOR TOTAL: R$ $total. \n";
    

?>