<?php

require_once('model/PostManager.php');

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