<?php

    $numero = array();

    for ($i=0; $i < 3 ; $i++) { 
        
        $numero[$i] = (int) readline("Número: ");

    }

    echo "Menor número: " . min($numero) . "\n";

?>