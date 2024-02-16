<?php

    echo "Anos bissextos (1980-2024): \n";

    for ($ano = 1980; $ano <= 2024; $ano++) { 
        
        echo ($ano % 4 == 0 and ($ano % 100 != 0 or $ano % 400 == 0)) ? "$ano " : "";
    }

    echo "\n";

?>