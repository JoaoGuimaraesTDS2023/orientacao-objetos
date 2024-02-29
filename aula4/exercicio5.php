<?php

    $pessoas = array(
        array(
            "nome" => "",
            "idade" => 0,
            "cidadeNatal" => "",
            "profissao" => "",
        ),
        array(
            "nome" => "",
            "idade" => 0,
            "cidadeNatal" => "",
            "profissao" => "",
        ),
        array(
            "nome" => "",
            "idade" => 0,
            "cidadeNatal" => "",
            "profissao" => "",
        ),
        array(
            "nome" => "",
            "idade" => 0,
            "cidadeNatal" => "",
            "profissao" => "",
        )
    );

    $maiorIdade = 0;

    for ($i=0; $i < count($pessoas) ; $i++) 
    {
        echo "PESSOA " . $i+1 . ": \n";

        foreach ($pessoas[$i] as $dado => $value) 
        {
            $pessoas[$i][$dado] = readline($dado . ": ");
        }

        echo "\n";
    }

    echo "PESSOA MAIS VELHA: \n";

    for ($i=0; $i < count($pessoas) ; $i++)
    {
        $maiorIdade = ($pessoas[$maiorIdade]["idade"] > $pessoas[$i]["idade"]) ? $maiorIdade : $i;
    }

    foreach ($pessoas[$maiorIdade] as $dado => $valor) 
    {
        echo "$dado: $valor \n";
    }

    echo "\n";
?>