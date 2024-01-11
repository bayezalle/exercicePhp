<?php

    function plusPetit($tableau) {
        if (!empty($tableau)) {
            return min($tableau);
        } else {
            return null;
        }
    }
    $tableau = [1, 2, 3, 4, 5];
    $resultat = plusPetit($tableau);
    echo "Le plus petit élément du tableau est : " . $resultat . PHP_EOL;
    echo "Le dernier élément du tableau est : " . var_export($resultat, true) . PHP_EOL;

    

    
?>