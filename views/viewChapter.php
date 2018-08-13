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
        <p class="content"><?= nl2br($chapter->content()) ?></p>
    </div>
</div>