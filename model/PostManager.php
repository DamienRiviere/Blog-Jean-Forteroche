<?php

require_once("Manager.php");

class PostManager extends Manager {

    /**
     * Fonction pour récupérer les posts
     *
     * @return $req
     */
    public function getPosts() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 6');
        return $req;
    }

}