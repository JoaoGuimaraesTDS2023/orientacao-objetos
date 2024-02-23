<?php


    function f($x) : float
    {
        return (5*$x) + (2*$x) + 3;
    }
    
    #################################################

    echo "Calculador funcão f(x) = 5x + 2x + 3. \n\n";

    for ($i=0; $i < 5; $i++) 
    { 
        $numero = (float) readline("Digite um valor para x: ");
        $resultado = f($numero);

        echo "y = " . $resultado;

        echo "\n\n";
    }
?>