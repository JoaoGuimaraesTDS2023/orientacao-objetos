<?php


    function calcArea($l1, $l2) : float
    {
        return $l1*$l2;
    }

    function calcPerimetro($l1, $l2) : float
    {
        return $l1+$l1+$l2+$l2;
    }

    ###################################################################

    echo "Calculando Área e Perímetro de um Retángulo. \n\n";

    for ($i=0; $i<3; $i++) 
    { 
        $base = (float) readline("Base (cm): ");
        $altura = (float) readline("Altura (cm): ");

        $area = (float) calcArea($base, $altura);
        $perimetro = (float) calcPerimetro($base, $altura);

        echo "Área: " . $area . "cm² \n";
        echo "Perímetro: " . $perimetro . "cm \n\n";
    }

?>