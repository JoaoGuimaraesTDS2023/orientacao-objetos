<?php


    function verificaPrimo($num): bool
    {
        $divisores = 0;

        for ($i=2; $i<$num ; $i++)
        { 
            $divisores = ($num % $i != 0) ? $divisores : $divisores+1;
        }

        $primo = ($divisores > 0) ? false : true;

        return $primo; 
    }

    ########################################################################

    $numero = 10;
    echo "Para sair digite um número > 2. \n";

    while ($numero > 2){

        $numero = (int) readline("Digite um número: ");

        echo (verificaPrimo($numero)) ? "$numero é primo" : "";

        echo "\n";

    };
?>