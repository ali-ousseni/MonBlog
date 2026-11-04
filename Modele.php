<?php
                function getConnection(){
                    try {
                    $connexion = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8','root', '');
                    }
                    catch(PDOException $e){
                        die($e->getMessage());
                    }                   
                    return $connexion;
                }

                function getBillets(){
                    $connexion = getConnection();
                    $billets = $connexion->query('select idBillet as id, dateBillet as date,'
                            . ' titreBillet as titre, contenuBillet as contenu from BILLET'
                            . ' order by idBillet desc');
                    return $billets;
                }