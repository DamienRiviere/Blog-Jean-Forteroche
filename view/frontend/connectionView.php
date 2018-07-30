<!-- View de la page de connexion du site -->
<?php ob_start(); ?>

<div class="container-page bg-light">

    <div class="container">

        <form class="form-signin" method="POST" action="index.php?action=checkConnection">
            <h2 class="style-contact-title text-center">Connexion</h2>
            <div class="col-lg-4 offset-lg-4 mb-3">
                <label for="emailconnect" class="sr-only">Adresse Email</label>
                <input type="email" name="emailconnect" id="emailconnect" class="form-control" placeholder="Adresse Email">
            </div>
            <div class="col-lg-4 offset-lg-4 mb-3">
                <label for="passwordconnect" class="sr-only">Mot de passe</label>
                <input type="password" name="passwordconnect" id="passwordconnect" class="form-control" placeholder="Mot de passe">
            </div>
            <div class="col-lg-4 offset-lg-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Se souvenir de moi
                    </label>
                </div>
                <button class="btn btn-primary btn-block" type="submit" name="formconnection">Connexion</button>
            </div>
        </form>
        <p class="text-center text-danger font-weight-bold style-register-error"><?php if(isset($error)) { echo $error; } ?></p>
        <p class="text-center">Pas encore inscrit ? <a href="index.php?action=register">Inscrivez-vous ici !</a></p>

        
    </div>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php');