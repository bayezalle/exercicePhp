<?php
    $nb1 = 5;
    $nb2 = 15;

    function plusGrand($nb1, $nb2)
    {
        if($nb1 > $nb2)
        {
            return $nb1;
        }else{
            return $nb2;
        }
    }

    $grand = max($nb1, $nb2);
    echo "le plus grand est :".' ' .$grand;
?>