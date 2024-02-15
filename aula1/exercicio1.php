<?php

    echo "10 números começando em 1 e pulando de 2 em 2: \n";

    $numero = 1;

    for ($limite = 0; $limite < 10; $limite++) { 
        
        echo "$numero ";
        $numero = $numero + 2;
    }

    echo "\n";

?>