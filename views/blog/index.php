<h1>bienvenue sur le blog</h1>
    <?php
        foreach($articles as $index => $article) {?>
            <article>
                <h3><?= $article['titre'] ?></h3>
            </article>
        <?php   } ?>