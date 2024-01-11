<?php

    function dernierElementTableau($tableau) {
        if (!empty($tableau)) {
            return end($tableau);
        } else {
            return null;
        }
    }
    $tableau1 = [1, 2, 3, 4, 5];
    $tableau2 = [];

    $resultat1 = dernierElementTableau($tableau1);
    $resultat2 = dernierElementTableau($tableau2);

    echo "Le dernier élément du tableau1 est : " . $resultat1 . PHP_EOL;
    echo "Le dernier élément du tableau2 est : " . var_export($resultat2, true) . PHP_EOL;

?>