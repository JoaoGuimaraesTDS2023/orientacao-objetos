<?php

    $numeros = array();
    $maior = 0;
    $menor = 0;

    echo "Qual o menor e o maior entre os 10 números seguintes? \n";

    for ($i=0; $i<10; $i++) 
    { 
        $numeros[$i] = (float) readline("Número: ");
    }

    $menor = ($numeros[0] < $numeros[1]) ? $numeros[0] : $numeros[1];

    for ($i=0; $i < count($numeros) ; $i++)
    {
        $maior = ($numeros[$maior] > $numeros[$i]) ? $maior : $i;
        $menor = ($numeros[$menor] < $numeros[$i]) ? $menor : $i;
    }

    echo "MAIOR: $numeros[$maior] \n";
    echo "MENOR: $numeros[$menor] \n";

?>