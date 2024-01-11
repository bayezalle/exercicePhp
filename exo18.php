<?php
    function verificationPassword($password) {
        $longueurMinimum = 8;
        $auMoinsUnChiffre = preg_match('/[0-9]/', $password);
        $auMoinsUneMajuscule = preg_match('/[A-Z]/', $password);
        $auMoinsUneMinuscule = preg_match('/[a-z]/', $password);
   
        return strlen($password) >= $longueurMinimum &&
               $auMoinsUnChiffre &&
               $auMoinsUneMajuscule &&
               $auMoinsUneMinuscule;
    }
    $resultat1 = verificationPassword("motdepasse"); 
    $resultat2 = verificationPassword("sec123");
    echo "Le résultat pour 'motdepasse' est : " . var_export($resultat1, true) . PHP_EOL;
    echo "Le résultat pour 'secure123' est : " . var_export($resultat2, true) . PHP_EOL
?>