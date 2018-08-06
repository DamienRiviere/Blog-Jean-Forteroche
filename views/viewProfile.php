<?php $this->_t = "Profil de " . $profile->Pseudo(); ?>

<div class="container-page bg-light">

    <div class="container col-lg-3 style-container"> 
        <h2 class="">Profil de <?= $profile->pseudo(); ?></h2>
        <p>Email : <?= $profile->email(); ?></p>
        <p>Date d'inscription : <?= $profile->dateInscription(); ?></p>
        <a href="">Editer mon profil</a>
    </div>

</div>