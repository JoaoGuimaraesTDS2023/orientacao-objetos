<?php

    function verificaPrimo($num): bool
    {
        $divisores = 0;
        $primo = false;

        if ($num != 0)
        {

            for ($i=2; $i<$num ; $i++)
            { 
                $divisores = ($num % $i != 0) ? $divisores : $divisores+1;
            }

            $primo = ($divisores > 0) ? false : true;
        }

        return $primo; 
    }   

########################################################################


    $numero = 1;
    $primos = array();

    echo "NÚMEROS PRIMOS INDICADOS - DIGITE '0' PARA SAIR \n";

    while ($numero != 0){
        
        $numero = (float) readline("Número: ");

        if (verificaPrimo($numero))
        {
            $primos[] = $numero;
        }

    }

    echo "Números primos digitados: ";

    foreach ($primos as $pos => $num)
    {
        echo ($pos == count($primos)-1) ? "$num." : "$num - ";
    }
    
    echo "\n";

?>