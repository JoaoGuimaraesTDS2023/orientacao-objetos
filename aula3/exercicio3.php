<?php


    function imprimeDados($nome, $hab, $area, $alt, $est) : string
    {
        return "| $nome | $hab | $area | $alt | $est |";
    }

    ################################################################

    $cidades = array(

        "nome" => array(
            "Foz do Iguaçu", 
            "Cascavel", 
            "Chapecó", 
            "Blumenau", 
            "Curitiba"
        ),

        "habitantes" => array(
            "250.000",
            "300.000",
            "240.000",
            "330.000",
            "1.500.000"
        ),
        
        "area" => array(
            "500km²",
            "420km²",
            "120km²",
            "200km²",
            "300km²"
        ),

        "altitude" => array(
            "145m",
            "320m",
            "620m",
            "85m",
            "850m"
        ),

        "estado" => array(
            "Paraná - PR",
            "Paraná - PR",
            "Santa Catarina - SC",
            "Santa Catarina - SC",
            "Paraná - PR"
        )
    );

    for ($i=0; $i < 5; $i++)
    { 
        $dados = imprimeDados($cidades["nome"][$i], $cidades["habitantes"][$i], $cidades["area"][$i], $cidades["altitude"][$i], $cidades["estado"][$i]);

        echo "$dados \n";
    }

?>