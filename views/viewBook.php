<?php $this->_t = "Billet simple pour l'Alaska"; ?>

<div id="container" class="bg-light">
    <?php foreach($chapters as $chapter): ?>
    <div class="container style-container col-xl-7 col-lg-7 col-md-10">
        <div class="row style-row">
            <h2 class="chapter-title"><?= $chapter->title() ?></h2>  
        </div>
        <p class="date-author text-primary"><?= $chapter->author() ?> le <?= $chapter->date() ?></p>
        <p class="content"><?= nl2br(substr($chapter->content(), 0, 500)) ?></p>
        <br>
        <a href="chapter&amp;id=<?= $chapter->id() ?>" class="btn btn-outline-primary">Voir le chapitre</a>
    </div>
    <?php endforeach; ?>
</div>
