<?php

require_once('model/PostManager.php');

/**
 * Fonction pour afficher les posts
 *
 */
function listPosts() {
    $postManager = new PostManager();
    $posts = $postManager->getPosts();

    require('view/frontend/indexView.php');
}