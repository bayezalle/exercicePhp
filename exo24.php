<?php

    function fonctionMagique() {
        include './libraryToInclude.php';

        return fonctionDeMaLibrairie();
    }
    $resultat = fonctionMagique();
    echo "Résultat de la fonction magique : " . $resultat;
    echo fonctionDeMaLibrairie();

?>