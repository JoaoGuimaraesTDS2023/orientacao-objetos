<?php

    $a = array();
    $b = array();
    $c = array();
    $d = array();

    echo "Array \$a: \n";

    for ($i=0; $i<5; $i++) 
    {
        $a[$i] = readline("Valor para A: ");
    }

    echo "Array \$a: \n";

    for ($i=0; $i<5; $i++) 
    {
        $b[$i] = readline("Valor para B: ");
    }

    $c = array_intersect($a, $b);
    $d = array_merge($a, $b);

    echo "VALORES Array \$c: \n";

    foreach ($c as $pos => $element) 
    {
        echo "\$c[$pos] = $element \n";
    }

    echo "\nVALORES Array \$d: \n";

    foreach ($d as $pos => $element) 
    {
        echo "\$d[$pos] = $element \n";
    }

    

?>