<?php
    include 'header.php' ;
    require_once 'models/gestionBdD.php' ;
    $billets = getBillets();
?>
    <body>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
                <p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
            </header>
            <div id="contenu">
                <?php
                foreach ($billets as $billet):
                    ?>
                    <article>
                        <header>
                            <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
                            <time><?= $billet['date'] ?></time>
                        </header>
                        <p><?= $billet['contenu'] ?></p>
                        <em><a href="#">Commentaires</a></em>
                    </article>
                    <hr />
                <?php endforeach; ?>
            </div> <!-- #contenu -->
<?php
include 'footer.php' ;
?>