<?php

    function plusPetit($nb1, $nb2, $nb3)
    {
      return min($nb1, $nb2, $nb3);
    }
    $petit = plusPetit(14,2,5);
    echo "le plus petit est : ".' '.$petit;
?>