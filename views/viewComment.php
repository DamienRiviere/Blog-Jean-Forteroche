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
                echo "<a class=\"btn btn-danger text-white float-right ml-2 trash2\" data-toggle=\"modal\" data-id=\"" . $chapter->id() . "\" data-idpost=\"" . $comment->id() . "\" data-target=\"#modalDeleteComment\" href=\"\">Supprimer</a>";   
                echo "<a class=\"btn btn-success text-white float-right\" href=\"confirmecomment&id_post=" . $comment->id() . "&id=" . $chapter->id() . "\">Approuver</a>";
                echo "<p class=\"text-secondary\">Ce commentaire n'est pas approuvé donc il n'est pas affiché sur le chapitre.</p>";
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
                echo "<a class=\"btn btn-danger text-white float-right ml-2 trash2\" data-toggle=\"modal\" data-id=\"" . $chapter->id() . "\" data-idpost=\"" . $comment->id() . "\" data-target=\"#modalDeleteComment\" href=\"\">Supprimer</a>";
                echo "<a class=\"btn btn-secondary text-white float-right\" href=\"cancelcomment&id_post=" . $comment->id() . "&id=" . $chapter->id() . "\">Annuler</a>";
                echo "<br>";                
                echo "<br>"; 
                echo "<div class=\"dropdown-divider\"></div>";  
            }
            else if($comment->checkComment() == 2)
            {
                echo "<div class=\"container style-comment\">";
                echo "<p class=\"text-primary\"><span class=\"font-weight-bold\">" . $comment->author() . "</span> le " . $comment->dateComment() . "</p>";
                echo "<p>" . html_entity_decode($comment->comment()) . "</p>";
                if($comment->checkComment() == 2)
                {
                    echo "<p class=\"text-danger font-weight-bold\">Ce commentaire a été signaler !</p>";
                }
                echo "</div>";   
                echo "<a class=\"btn btn-danger text-white float-right ml-2 trash2\" data-toggle=\"modal\" data-id=\"" . $chapter->id() . "\" data-idpost=\"" . $comment->id() . "\" data-target=\"#modalDeleteComment\" href=\"\">Supprimer</a>";
                echo "<a class=\"btn btn-secondary text-white float-right\" href=\"cancelcomment&id_post=" . $comment->id() . "&id=" . $chapter->id() . "\">Annuler</a>";
                echo "<a class=\"btn btn-success text-white float-right mr-2\" href=\"confirmecomment&id_post=" . $comment->id() . "&id=" . $chapter->id() . "\">Approuver</a>";
                echo "<br>";                
                echo "<br>"; 
                echo "<div class=\"dropdown-divider\"></div>";  
            }
        ?>
        <?php endforeach; ?>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="modalDeleteComment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Supression du commentaire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer le commentaire ?   
            </div>
            <div class="modal-footer">
                <a href="" id="modalDeleteC" class="btn btn-danger">Supprimer</a>
                <a href="" class="btn btn-secondary" data-dismiss="modal">Annuler</a>
            </div>
        </div>
    </div>
</div>