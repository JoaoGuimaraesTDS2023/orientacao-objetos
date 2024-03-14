<?php

    function transformaCelsius($fahrenheit) : float
    {
        $celsius = ($fahrenheit-32) / 1.8;

        return round($celsius, 2);
    }

    function fatorial($num) : float
    {

        if ($num < 1) {

            return 0;

        }else
        {
            $calc = 1; 

            for($i = $num ; $i > 1 ; $i--)
            {
                $calc *= $i;
            } 
        }

        return $calc;
    }

    function f($x) : float
    {
        $f = (($x*$x) + ($x*2) + 4) / (2*$x);

        return round($f, 2);
    }

    function linha() : void
    {
        echo "\n=====================================================\n\n";
    }

    $numeros = array();
    $vetor1 = array();
    $vetor2 = array();
    $vetor3 = array();

    linha();

    echo "Digite 5 números \n";

    for($i = 0 ; $i < 5 ; $i++)
    {
        $numeros[$i] = (float) readline($i+1 . ". Número: ");
        $vetor1[$i] = transformaCelsius($numeros[$i]);
        $vetor2[$i] = fatorial($numeros[$i]);
        $vetor3[$i] = f($numeros[$i]);
    }

    for($i = 0 ; $i < 5 ; $i++)
    {
        linha();

        echo "Número digitado: $numeros[$i] \n";

        echo "Valor em Celsius: $vetor1[$i] \n";

        echo ($numeros[$i] >= 1) ? "Fatorial: $vetor2[$i] \n" : "";

        echo "f($numeros[$i]) = ($numeros[$i]² + 2($numeros[$i]) + 4) / 2($numeros[$i]) = $vetor3[$i] \n";
    }

    linha();
?>