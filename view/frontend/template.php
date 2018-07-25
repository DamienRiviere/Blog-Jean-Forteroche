<!-- Template de base du site -->
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog de Jean Forteroche</title>
        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <!-- CSS FontAwesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="public/css/style.css"/>
   </head>

    <body>

        <header>

            <!-- DEBUT BARRE DE NAVIGATION FIXE -->
            <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="background-navbar">

                <a id="navbar-title" href="#"><strong>Jean<br>FORTEROCHE</strong></a>

                <!-- Bouton mobile -->
                <button class="navbar-toggler bg-secondary" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">

                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active">                         
                            <a class="nav-link text-dark" href="index.php"><i class="fas fa-home"></i> ACCUEIL<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-book"></i> LIVRES</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <!-- Lien pour afficher la liste des chapitres d'un "Billet simple pour l'Alaska" -->
                                <a class="dropdown-item" href="index.php?action=listPosts">Billet simple pour l'Alaska</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark" href="index.php?action=contact"><i class="fas fa-envelope"></i> CONTACT</a>
                        </li>
                        
                    </ul>

                    <ul class="navbar-nav">

                        <!-- Connexion -->
                        <li class="nav-item">
                            <span class="glyphicon glyphicon-home"></span>
                            <a class="nav-link text-dark" href="#"><i class="fas fa-sign-in-alt"></i> CONNEXION</a>
                        </li>

                        <!-- Inscription -->
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#"><i class="fas fa-file-signature"></i> INSCRIPTION</a>
                        </li>

                    </ul>

                </div>

            </nav>
            <!-- FIN BARRE DE NAVIGATION FIXE -->

        </header>

        <?= $content ?>

        <footer class="footer">
            <div id="social-media">
                <p class="text-footer">Suivez moi sur mes réseaux sociaux :</p>
                <a href="https://www.facebook.com" title="Visitez ma page Facebook"><i class="fab fa-facebook-square style-logo"></i></a>
                <a href="https://twitter.com/?lang=fr" title="Visitez ma page Twitter"><i class="fab fa-twitter style-logo"></i></a>
                <a href="https://plus.google.com/discover" title="Visitez ma page Google +"><i class="fab fa-google-plus style-logo"></i></a>
                <a href="https://www.youtube.com/" title="Visitez ma page Youtube"><i class="fab fa-youtube style-logo"></i></a>
            </div>
        </footer>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>

</html>