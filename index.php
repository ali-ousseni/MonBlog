<?php
    require 'Modele.php';
    try{        
        $billets=getBillets();   
        // Affichage
        $contenu = 'vueAcceuil.php' ;
        require 'gabarit.php';
    } catch(Exception $e){
        $msgErreur =  $e->getMessage();
        $contenu = 'vueErreur.php';
        require 'gabarit.php';
    }