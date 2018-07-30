<?php

require_once('model/PostManager.php');
require_once('model/PostContact.php');
require_once('model/Profile.php');

use \Openclassrooms\Projet_4\Model\PostManager;
use \Openclassrooms\Projet_4\Model\PostContact;
use \Openclassrooms\Projet_4\Model\Profile;

/**
 * Fonction pour afficher les derniers posts sur la page d'accueil
 *
 */
function listPostsIndex() {
    $postManager = new PostManager();
    $posts = $postManager->getPostsIndex();

    require('view/frontend/indexView.php');
}

/**
 * Fonction pour afficher la liste des posts
 *
 */
function listPosts() {
    $postManager = new PostManager();
    $posts = $postManager->getPosts();

    require('view/frontend/alaskaBookView.php');
}

/**
 * Fonction pour afficher un post en fonction de son ID
 *
 */
function post() {
    $postManager = new PostManager();
    $post = $postManager->getPost($_GET['id']);

    require('view/frontend/chapterView.php');
}

/**
 * Fontion qui affiche la page de contact
 *
 */
function showContact() {   
    require('view/frontend/contactView.php');
}

/**
 * Fonction qui affiche la page d'inscription
 *
 */
function showRegister() {
    require('view/frontend/registerView.php');
}

/**
 * Fonction qui affiche la page de connexion
 *
 */
function showConnection() {
    require('view/frontend/connectionView.php');
}

/**
 * Fonction qui affiche la page d'un profil en fonction de son id
 *
 */
function showProfile() {
    $profile = new Profile();
    $userProfile = $profile->getProfile(intval($_GET['id']));

    require('view/frontend/profileView.php');
}