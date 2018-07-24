<!-- View d'un chapitre du roman "Billet simple pour l'Alaska" en fonction de son ID -->

<?php ob_start(); ?>

<div id="container" class="bg-light">
    <div class="container style-link">
        <a href="index.php?action=listPosts">Retour sur la liste des chapitres</a>
    </div>
    <div class="container style-container">
        <div class="row style-row">
            <h2 class="chapter-title"><?= $post['title'] ?></h2>
        </div>
        <p class="date-author text-primary"><?= $post['author'] ?> le <?= $post['creation_date_fr'] ?></p>
        <p class="content"><?= nl2br($post['content']) ?></p>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>