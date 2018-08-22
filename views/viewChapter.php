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
            <?php
                if($comment->checkComment() == 1)
                {
                    echo "<div class=\"container style-comment\">";
                    if(isset($_SESSION['pseudo']) AND $_SESSION['pseudo'] == $comment->author())
                    {
                        echo "<p class=\"text-primary\"><span class=\"font-weight-bold\">" . $comment->author() . '</span> le ' .  $comment->dateComment() . "<a class=\"float-right\" href=\"editcomment&id_post=" . $comment->id() . "&id=" . $chapter->id() . "\">Modifier</a></p>";
                    }
                    else
                    {
                        echo "<p class=\"text-primary\"><span class=\"font-weight-bold\">" . $comment->author() . '</span> le ' .  $comment->dateComment() . "</p>";
                    }
                    echo "<p>" . html_entity_decode($comment->comment()) . "</p>";
                    if($comment->dateModification() !== null)
                    {
                        echo "<p class=\"date-author text-primary\">Modifié par " . $comment->author() . " le " . $comment->dateModification() . "</p>";
                    }
                    echo "</div>";    
                }
            ?>
        <?php endforeach; ?>
        
    </div>
</div>