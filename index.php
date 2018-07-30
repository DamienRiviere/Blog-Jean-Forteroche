<?php

require('controller/frontend.php');
require('controller/backend.php');

if (isset($_GET['action']) AND !empty($_GET['action'])) {
    // Action = listPosts alors on affiche la liste des chapitres
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    // Action = post alors on affiche le chapitre en fonction de son ID
    else if ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }
    }
    // Action = contact alors on affiche la page du formulaire de contact
    else if ($_GET['action'] == 'contact') {
        showContact();
    }
    // Action = register alors on affiche la page d'inscription
    else if ($_GET['action'] == 'register') {
        showRegister();
    }
    // Action = newRegister on commence la procédure d'inscription
    else if ($_GET['action'] == 'newRegister') {
        checkRegister();
    }
    // Action = connection on affiche la page de connexion
    else if ($_GET['action'] == 'connection') {
        showConnection();
    }
    // Action = checkConnection on vérifie les informations à la connexion
    else if ($_GET['action'] == "checkConnection") {
        checkConnection();
    }
    // Action = profile on redirige l'utilisateur vers son profil après la connexion
    else if ($_GET['action'] == 'profile') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            showProfile();
        }
    }
    // Action = disconnection on se déconnecte du profil
    else if ($_GET['action'] == 'disconnection') {
        disconnection();
    }
    else if ($_GET['action'] == 'editProfile') {
        editProfile();
    }
    // TEST MAIL
    else if ($_GET['action'] == 'test') {
        actionForm();
    }
}
// Sinon on affiche la page d'accueil
else {
    listPostsIndex();
}