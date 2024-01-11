<?php

    function listHTML($titre, $elements) {
        // Vérification des conditions pour retourner null
        if (empty($titre) || empty($elements)) {
            return null;
        }

        // Construction de la liste HTML
        $resultat = "<h3>$titre</h3><ul>";
        foreach ($elements as $element) {
            $resultat .= "<li>$element</li>";
        }
        $resultat .= "</ul>";

        return $resultat;
    }
    $titre = "Capitale";
    $liste = ["Paris", "Berlin", "Moscou"];

    echo listHTML($titre, $liste);

?>