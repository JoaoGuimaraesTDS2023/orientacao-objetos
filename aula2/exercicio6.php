<?php

    $num = array();

    echo "Multiplicação de inteiros: \n";

    $num[0] = (int) readline("Primeiro Número: ");
    $num[1] = (int) readline("Segundo Número: ");

    $menor = min($num);
    $maior = max($num);
    $maior = ($maior < 0) ? $maior-$maior-$maior : $maior;

    $resultado = $menor;

    if ($maior == 0 or $menor == 0) {
        echo "RESULTADO: 0 \n";

    }else{
        
        for ($i = 1; $i < $maior; $i++) { 
            $resultado += $menor;
        }

        $resultado = (max($num) < 0 and $menor < 0) ? $resultado-$resultado-$resultado : $resultado;

        echo "RESULTADO: $resultado \n" ;
    }

    

?>