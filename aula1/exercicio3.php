<?php

    echo "Anos bissextos (1980-2024): \n";

    for ($ano = 1980; $ano <= 2024; $ano = $ano + 4) { 
        
        if ($ano % 100 != 0 or $ano % 400 == 0 ) {
            echo "$ano ";
        }
    }

    echo "\n";

?>