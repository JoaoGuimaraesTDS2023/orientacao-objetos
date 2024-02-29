<?php

    $numeros = array();
    $soma = 0;

    echo "MÉDIA DE 10 NÚMEROS: \n";

    for ($i=0; $i<10; $i++) 
    { 
        $numeros[$i] = (float) readline("Número: ");
        $soma += $numeros[$i];
    }

    echo "Média = " . $soma/10 . "\n";

?>