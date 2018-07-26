<?php

require_once('model/PostManager.php');
require_once('model/PostContact.php');

use \Openclassrooms\Projet_4\Model\PostManager;
use \Openclassrooms\Projet_4\Model\PostContact;

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