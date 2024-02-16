<?php

    $min = (int) readline("Mínimo: ");
    $max = (int) readline("Máximo: ");

    echo "Divisíveis por 5 entre $min e $max: ";

    for ($i=$min; $i < $max ; $i++) { 

        echo ($i % 5 == 0) ? $i . " " : "";
    }

    echo "\n";
?>