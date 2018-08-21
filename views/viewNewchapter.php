<?php $this->_t = "Publier un chapitre"; ?>

<div class="container-page bg-light">

    <div class="container col-lg-8 style-link">
        <a href="editionchapter">Retour sur le tableau</a>
    </div>

    <div class="container col-lg-8 style-container">
        <h2 class="text-center">Publier un chapitre :</h2>
        <form action="newchapter" method="POST" class="form-register">
            <div class="form-group">
                <label for="inputtitle">Titre :</label>
                <input type="text" name="chapter_title" class="form-control" id="inputtitle">
            </div>
            <div class="form-group">
                <textarea name="chapter_content" id="newchapter"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Publier le chapitre</button>
        </form>
        <p class="text-center text-danger font-weight-bold style-register-error"><?php if(isset($error)) { echo $error; }?></p>
        <p class="text-center text-success font-weight-bold style-register-error"><?php if(isset($msg)) { echo $msg; }?></p>
    </div>

</div>
