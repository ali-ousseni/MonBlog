<?php
                function getBdD(){
                    $bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8','root', '');
                        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);            
                    return $bdd;
                }

                function getBillets(){
                    $bdd = getBdD();
                    $billets = $bdd->query('select idBillet as id, dateBillet as date,'
                            . ' titreBillet as titre, contenuBillet as contenu from BILLET'
                            . ' order by idBillet desc');
                    return $billets;
                }

                function getBillet(){
                    $bdd = getBdD();
                    $billet = $bdd->query('select idBillet from Billet');
                    return $billet;
                }

                function getCommentaires(){
                    $bdd = getBdD();
                    $commentaires = $bdd->query('select idCommentaire as id, auteurCommentaire as auteur,'
                            . ' contenuCommentaire as contenu, idBillet as billet from Commentaire');
                    return $commentaires;
                }