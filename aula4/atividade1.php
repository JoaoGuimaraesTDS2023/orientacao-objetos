<?php

    function verificaPrimo($num): bool
    {
        $divisores = 0;

        if ($num != 0)
        {
            for ($i=2; $i<$num ; $i++)
            { 
                if ($num % $i == 0) 
                {
                    return false;
                }
            }
            return true;
        }

        return false;
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
