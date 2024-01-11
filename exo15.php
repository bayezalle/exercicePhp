<?php

    function plusGrand($tableau) {
        if (!empty($tableau)) {
            return max($tableau);
        } else {
            return null;
        }
    }
    $tableau = [1, 2, 3, 4, 5];
    $resultat = plusGrand($tableau);
    echo "Le plus grand élément du tableau1 est : " . $resultat . PHP_EOL;

    
?>