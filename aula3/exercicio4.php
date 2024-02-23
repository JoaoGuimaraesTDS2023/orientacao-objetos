<?php

    function calcMedia($a, $b, $c) : float
    {   
        $media = ((3*$a) + (5*$b) + (2*$c)) / 10;

        return round($media, 1);
    }

    ##################################################

    $numeros = array();

    echo "Calculador de Média Ponderada (3A + 5B + 2C) / 10. \n\n";

    for ($i=0; $i < 3; $i++) 
    { 
        $numeros[$i] = (float) readline("Número: ");
    }

    $media = calcMedia($numeros[0], $numeros[1], $numeros[2]);

    echo "Média: $media \n\n";
?>