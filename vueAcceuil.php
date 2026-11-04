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
                <?php endforeach;
