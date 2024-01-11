<?php
    $nb1 = 5;
    $nb2 = 15;
    
    function plusPetit($nb1, $nb2)
    {
        if($nb1 < $nb2)
        {
            return $nb1;
            
        }else{

            return $nb2;
        }
        
    }
    $petit = min($nb1, $nb2);
    echo " le plus petit est :".' '. $petit;
?>
