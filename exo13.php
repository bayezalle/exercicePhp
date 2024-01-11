<?php

    function premierElementTableau($tableau) {
        if (!empty($tableau)) {
            return reset($tableau);
        } else {
            return null;
        }
    }
    $tableau1 = [1, 2, 3, 4, 5];
    $tableau2 = [];

    $resultat1 = premierElementTableau($tableau1);
    $resultat2 = premierElementTableau($tableau2);

    echo "Le premier élément du tableau1 est : " . $resultat1 . PHP_EOL; 
    echo "Le premier élément du tableau2 est : " . var_export($resultat2, true) . PHP_EOL;

?>