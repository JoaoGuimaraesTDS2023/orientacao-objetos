<?php

    echo "Multiplicação de inteiros: \n";

    $num1 = (int) readline("Primeiro Número: ");
    $num2 = (int) readline("Segundo Número: ");
    $resultado = $num1;

    for ($i = 1; $i < $num2; $i++) { 
        $resultado += $num1;
    }

    echo "RESULTADO: $resultado \n";

?>