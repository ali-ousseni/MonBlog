<?php
                foreach ($commentaires as $commentaire):
                    ?>
                    <article>
                        <header>
                            <h1 class="titreBillet"><?= $commentaire['titre'] ?></h1>
                            <time><?= $commentaire['date'] ?></time>
                        </header>
                        <p><?= $commentaire['contenu'] ?></p>
                    </article>
                    <hr />
                <?php endforeach;