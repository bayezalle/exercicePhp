<?php

function quelleDate() {
    return date("d/m/Y");
}

// Appel de la fonction
$dateActuelle = quelleDate();
echo "La date actuelle est : " . $dateActuelle;

?>