<!-- View de la page d'inscription du site -->
<?php ob_start(); ?>

<div class="container-page bg-light">

    <div class="container">
        
        <h2 class="style-contact-title text-center">Créer un compte :</h2>
        <form action="index.php?action=newRegister" method="POST" class="form-register">
            <div class="col-lg-4 offset-lg-4">
                <div class="form-group">
                    <label for="inputpseudo">Pseudo :</label>
                    <input type="text" name="pseudo" class="form-control" id="inputpseudo" value="<?php if(isset($pseudo)) { echo $pseudo; }?>">
                </div>
            </div>
            <div class="col-lg-4 offset-lg-4">
                <div class="form-group">
                    <label for="inputpassword">Mot de passe :</label>
                    <input type="password" name="password" class="form-control" id="inputpassword">
                </div>
            </div>
            <div class="col-lg-4 offset-lg-4">
                <div class="form-group">
                    <label for="inputpassverif">Retapez votre mot de passe :</label>
                    <input type="password" name="cpassword" class="form-control" id="inputpassverif">
                </div>
            </div>
            <div class="col-lg-4 offset-lg-4">
                <div class="form-group">
                    <label for="inputemail">Email :</label>
                    <input type="email" name="email" class="form-control" id="inputemail" value="<?php if(isset($email)) { echo $email; }?>">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Inscription</button>
            </div>
        </form>
        <p class="text-center text-danger font-weight-bold style-register-error"><?php if(isset($error)) { echo $error; } ?></p>
    </div>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
