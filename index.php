<?php

require('controller/frontend.php');

if (isset($_GET['action'])) {
    // Si action = listPosts alors on affiche la liste des chapitres
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    // Si action = post alors on affiche le chapitre en fonction de son ID
    else if ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }
    }
}
// Sinon on affiche la page d'accueil
else {
    listPostsIndex();
}