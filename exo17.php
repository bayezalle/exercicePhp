<?php

    function verificationPassword($password) {
        $longueurMinimum = 8;

        if (strlen($password) >= $longueurMinimum) {
            return true;
        } else {
            return false;
        }
    }
    $resultat1 = verificationPassword("motdepasse"); 
    $resultat2 = verificationPassword("sec123");
    echo "Le résultat pour 'motdepasse' est : " . var_export($resultat1, true) . PHP_EOL;
    echo "Le résultat pour 'secure123' est : " . var_export($resultat2, true) . PHP_EOL;

?>
