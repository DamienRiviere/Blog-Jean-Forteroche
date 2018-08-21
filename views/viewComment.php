<?php $this->_t = "Administration des commentaires"; ?>

<div class="container-page bg-light">

    <div class="container col-lg-8 style-link">
        <a href="editionchapter">Retour sur le tableau</a>
    </div>

    <div class="container">
        <h2 class="mt-4">Commentaires du <?= $chapter->title() ?> :</h2>
        <?php foreach($comments as $comment) : ?>
        <?php 
            if($comment->checkComment() == 0)
            {
                echo "<div class=\"container style-comment\">";
                echo "<p class=\"text-primary\"><span class=\"font-weight-bold\">" . $comment->author() . "</span> le " . $comment->dateComment() . "</p>";
                echo "<p>" . html_entity_decode($comment->comment()) . "</p>";
                echo "</div>";   
                echo "<a class=\"btn btn-danger text-white float-right ml-2\" href=\"comment&id=" . $chapter->id() . "&deletechapter&id_post=" . $comment->id() . "\">Supprimer</a>";  
                echo "<a class=\"btn btn-success text-white float-right\" href=\"comment&id=" . $chapter->id() . "&confirmecomment&id_post=" . $comment->id() . "\">Approuver</a>";
                echo "<br>";                
                echo "<br>"; 
                echo "<div class=\"dropdown-divider\"></div>";
            }
            else if($comment->checkComment() == 1)
            {
                echo "<div class=\"container style-comment\">";
                echo "<p class=\"text-primary\"><span class=\"font-weight-bold\">" . $comment->author() . "</span> le " . $comment->dateComment() . "</p>";
                echo "<p>" . html_entity_decode($comment->comment()) . "</p>";
                echo "</div>";   
                echo "<a class=\"btn btn-danger text-white float-right ml-2\" href=\"comment&id=" . $chapter->id() . "&deletechapter&id_post=" . $comment->id() . "\">Supprimer</a>";
                echo "<br>";                
                echo "<br>"; 
                echo "<div class=\"dropdown-divider\"></div>";  
            }
        ?>
        <?php endforeach; ?>
    </div>

</div>