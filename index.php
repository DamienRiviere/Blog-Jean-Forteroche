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

                <a id="navbar-title" href="#"><strong>JEAN FORTEROCHE</strong></a>

                <!-- Bouton mobile -->
                <button class="navbar-toggler bg-secondary" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">

                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active">                         
                            <a class="nav-link text-dark" href="#"><i class="fas fa-home"></i> ACCUEIL<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-book"></i> LIVRES</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Billet simple pour l'Alaska</a>
                                <a class="dropdown-item" href="#">Prochain livre</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#"><i class="fas fa-envelope"></i> CONTACT</a>
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

        <!-- DEBUT CAROUSEL -->
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">

            <!-- Indicateur du nombre de slide -->
            <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
            </ol>

            <!-- Contient les sliders et leurs description -->
            <div class="carousel-inner">

                <div class="carousel-item active" id="slider_1">
                    <!-- Image 1 -->
                    <img class="img-fluid" src="public/img/slider1.jpg" alt="First slide">
                    <!-- Description slider 1 -->
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1 class="style_title">Bienvenue sur le blog de Jean Forteroche !</h1>
                            <p class="style_texte">Pour mon prochain roman "Billet simple pour l'Alaska", j'ai souhaité pouvoir publier les chapitres en ligne sur mon blog. Un chapitre sortira par mois, bonne lecture !</p>
                            <p><a class="btn btn-lg btn-primary btn-carousel" href="#" role="button">Voir le dernier chapitre</a></p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" id="slider_2">
                    <!-- Image 2 -->
                    <img class="img-fluid" src="public/img/slider2.jpg" alt="Second slide">
                    <!-- Description slider 2 -->
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h2 class="style_title">Prochain roman</h2>
                            <p class="style_texte">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary btn-carousel" href="#" role="button">Voir prochain projet</a></p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" id="slider_3">
                    <!-- Image 2 -->
                    <img class="img-fluid" src="public/img/slider3.jpg" alt="Third slide">
                    <!-- Description slider 2 -->
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h2 class="style_title">Me contacter</h2>
                            <p class="style_texte">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary btn-carousel" href="#" role="button">Contact</a></p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Chevron gauche -->
            <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                <i class="fas fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Chevron droit -->
            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                <i class="fas fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
        <!-- FIN CAROUSEL -->

        <div class="banner-responsive">          
            <!-- 1ère image -->
            <img class="img-fluid" src="public/img/slider1.jpg" alt="First slide">
            <h2 class="title-banner">Bienvenue sur le blog de Jean Forteroche !</h2>
        </div>

        <main role="main">
            <section class="jumbotron text-center">
                <div class="container">
                    <h1>Qui suis-je ?</h1>
                    <p class="text-jumbotron">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </section>

            <div class="album py-5 bg-light">
                <div class="container">
                    <h1 class="title-jumbotron">Dernières publications :</h1>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="public/img/thumbnail1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a class="btn btn-primary" href="#" role="button">Voir chapitre</a>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="public/img/thumbnail2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a class="btn btn-primary" href="#" role="button">Voir chapitre</a>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="public/img/thumbnail3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a class="btn btn-primary" href="#" role="button">Voir chapitre</a>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="public/img/thumbnail4.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a class="btn btn-primary" href="#" role="button">Voir chapitre</a>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="public/img/thumbnail5.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a class="btn btn-primary" href="#" role="button">Voir chapitre</a>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="public/img/thumbnail6.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a class="btn btn-primary" href="#" role="button">Voir chapitre</a>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="footer">
            <div id="social-media">
                <p class="text-footer">Suivez moi sur mes réseaux sociaux :</p>
                <a href="https://www.facebook.com" title="Visitez ma page Facebook"><i class="fab fa-facebook-square style-logo"></i></a>
                <a href="https://twitter.com/?lang=fr" title="Visitez ma page Twitter"><i class="fab fa-twitter style-logo"></i></a>
                <a href="https://plus.google.com/discover" title="Visitez ma page Google +"><i class="fab fa-google-plus style-logo"></i></a>
                <a href="https://fr.linkedin.com" title="Visitez ma page Youtube"><i class="fab fa-youtube style-logo"></i></a>
            </div>
        </footer>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>

</html>