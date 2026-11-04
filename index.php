                <?php
                // Accès aux donnnées
                $bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8','root', '');
                $billets = $bdd->query('select idBillet as id, dateBillet as date,'
                        . ' titreBillet as titre, contenuBillet as contenu from BILLET'
                        . ' order by idBillet desc');
// Affichage
include 'vueAcceuil.php' ;