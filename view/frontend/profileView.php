<!-- View de la page de profil d'un membre -->
<?php ob_start(); ?>

<div class="container-page bg-light">

    <div class="container col-lg-3 style-container"> 
        <h2 class="">Profil de <?= $userProfile['pseudo']; ?></h2>
        <p>Email = <?= $userProfile['email']; ?></p>
        <p>Date d'inscription = <?= $userProfile['date_inscription']; ?></p>
        <a href="index.php?action=editProfile">Editer mon profil</a>
    </div>

</div>

<?php $content = ob_get_clean(); ?>

<?php require ('template.php');