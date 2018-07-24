<?php

require_once("Manager.php");

class PostManager extends Manager {

    /**
     * Fonction pour récupérer les derniers posts de la page d'accueil
     *
     * @return $req
     */
    public function getPostsIndex() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 3');
        return $req;
    }

    /**
     * Fonction pour récupérer les derniers posts
     *
     * @return $req
     */
    public function getPosts() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, author, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date');
        return $req;
    }

    /**
     * Fonction qui récupère un post en fonction de son ID
     *
     * @param [type] $postId
     * @return $post
     */
    public function getPost($postId) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, author, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();
        return $post;
    }

    

}