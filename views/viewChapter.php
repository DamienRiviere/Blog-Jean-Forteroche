<?php $this->_t = $chapter->title() ?>

<div class="container-page bg-light">
    <div class="container style-link">
        <a href="book">Retour sur la liste des chapitres</a>
    </div>
    <div class="container style-container">
        <div class="row style-row">
            <h2 class="chapter-title"><?= $chapter->title() ?></h2>
        </div>
        <p class="date-author text-primary"><?= $chapter->author() ?> le <?= $chapter->date() ?></p>
        <p class="content"><?= nl2br(html_entity_decode($chapter->content())) ?></p>
        <?php
        if($chapter->dateModification() !== null)
        {
            echo "<p class=\"date-author text-primary\">Modification le " . $chapter->dateModification() ."</p>";
        }
        ?>
    </div>

    <div class="container">
        <?php

        $content;

            if(!empty($_SESSION))
            {
                echo $content = 
                "<h2 class=\"mt-4 mb-4\">Poster un commentaire :</h2>
                <form action=\"\" method=\"POST\" class=\"form-register\">
                    <textarea name=\"comment\" id=\"newcomment\"></textarea>
                    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-block mt-3\">Envoyer le commentaire</button>
                </form>";
            }
            else
            {
                echo  $content = "<p class=\"text-center\"><a href=\"authentication\">Connectez-vous</a> ou <a href=\"register\">inscrivez-vous</a> pour ajouter un commentaire.</p>";
            }
        ?>
        <h2 class="mt-4">Commentaires :</h2>

        <?php foreach($comments as $comment) : ?>
        <div class="container style-comment">
            <?php
                if($_SESSION['slug'] == 'admin' AND $_SESSION['level'] == '2')
                {
                    echo "<p class=\"text-primary\">" . $comment->author() . ' le ' .  $comment->dateComment() . "<a class=\"float-right\" href=\"chapter&id=" . $chapter->id() . "&deletechapter&id_post=" . $comment->id() . "\">Supprimer</a></p>";
                }
                else
                {
                    echo "<p class=\"text-primary\">" . $comment->author() . ' le ' .  $comment->dateComment() . "</p>";
                }
            ?>
            <p><?= html_entity_decode($comment->comment()) ?></p>
        </div>
        <?php endforeach; ?>

    </div>
</div>