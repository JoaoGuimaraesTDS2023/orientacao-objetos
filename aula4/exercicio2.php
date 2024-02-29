<?php

    $palavras = array();
    $vazio = array();

    echo "Array string com 5 elementos: \n";

    for ($i=0; $i<5; $i++) 
    {
        $palavras[$i] = (string) readline("Palavra: ");
    }

    for ($i=0; $i<count($palavras); $i++) 
    {
        $vazio[$i] = $palavras[$i];
    }

    echo "\$vazio = ";

    foreach ($vazio as $pos => $palavra) 
    {
        echo ($pos != count($vazio)-1) ? "$palavra, " : "$palavra.";
    }

    echo "\n";

?>