<?php
        function capital($pays) {
            $pays = strtolower($pays);
            switch ($pays) {
                case 'france':
                    return 'Paris';
                case 'allemagne':
                    return 'Berlin';
                case 'italie':
                    return 'Rome';
                case 'maroc':
                    return 'Rabat';
                case 'espagne':
                    return 'Madrid';
                case 'portugal':
                    return 'Lisbonne';
                case 'angleterre':
                    return 'Londres';
                default:
                    return 'Inconnu';
            }
        }
        echo "La capitale de l'Espagne est : " . capital('Espagne') . PHP_EOL;
        echo "La capitale du Brésil est : " . capital('Brésil') . PHP_EOL; 
        
?>