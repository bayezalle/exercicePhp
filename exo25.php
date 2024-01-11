<?php
    function getUtilisateursAutorises() {
        // Inclure la librairie
        include './libraryToInclude.php';

        // Récupérer la liste de tous les utilisateurs
        $tousUtilisateurs = getAllUtilisateurs();

        // Supprimer les utilisateurs bloqués
        $utilisateursNonBloques = array_filter($tousUtilisateurs, function($utilisateur) {
            return !$utilisateur->bloque;
        });

        // Supprimer les utilisateurs sans adresse email
        $utilisateursAvecEmail = array_filter($utilisateursNonBloques, function($utilisateur) {
            return isset($utilisateur->email) && !empty($utilisateur->email);
        });

        // Supprimer les utilisateurs de moins de 18 ans
        $utilisateursMajeurs = array_filter($utilisateursAvecEmail, function($utilisateur) {
            return $utilisateur->age >= 18;
        });

    // Retourner la nouvelle liste propre
    return $utilisateursMajeurs;
    }
    // Appel de la fonction
    $utilisateursAutorises = getUtilisateursAutorises();
    echo "Utilisateurs autorisés : " . print_r($utilisateursAutorises, true);
?>