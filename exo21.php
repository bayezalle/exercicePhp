<?php

    function remplacerLesLettres($chaine) {
        $remplacements = array('e' => '3', 'i' => '1', 'o' => '0');
        return strtr($chaine, $remplacements);
    }

    $resultat1 = remplacerLesLettres("Bonjour les amis"); 
    $resultat2 = remplacerLesLettres("Les cours de programmation Web sont trops cools");

    echo $resultat1. PHP_EOL;
    echo $resultat2. PHP_EOL;

?>