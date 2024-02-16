<?php

    $numeros = array();
    $pares = 0;
    $impares = 0;

    for ($i=0; $i < 10; $i++) { 

        echo $i+1 . ". ";
        $numeros[$i] = (int) readline("Número: ");

        if ($numeros[$i] % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    echo "Quant. dos pares: $pares \nQuant. dos impares: $impares \n";


?>