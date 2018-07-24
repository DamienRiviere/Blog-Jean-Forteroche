<!-- View de la page "Livres - Billet simple pour l'Alaska" -->

<?php ob_start(); ?>

<div id="container" class="bg-light">
    <?php
    while ($data = $posts->fetch()) 
    {
    ?>
    <div class="container style-container">
        <div class="row style-row">
            <h2 class="chapter-title"><?= $data['title'] ?></h2>  
        </div>
        <p class="date-author text-primary"><?= $data['author'] ?> le <?= $data['creation_date_fr'] ?></p>
        <p class="content"><?= nl2br(substr($data['content'], 0, 500)) ?></p>
        <br>
        <a href="index.php?action=post&amp;id=<?= $data['id'] ?>" class="btn btn-outline-primary">Voir le chapitre</a>
    </div>
    <?php
    }
    $posts->closeCursor();
    ?>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>