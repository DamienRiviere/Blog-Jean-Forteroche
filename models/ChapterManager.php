<?php

class ChapterManager extends Model {

    /**
     * Fonction qui retourne tous les chapitres
     *
     * @return $var;
     */
    public function getChapters()
    {
        $var = [];
        $req = $this->getDb()->prepare('SELECT id, title, content, author, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Chapter($data);
        }
        return $var;
        $req->closeCursor();
    }

    /**
     * Fonction qui récupère les derniers chapitres à affichier sur la page d'accueil
     *
     * @return $var;
     */
    public function getChaptersHome()
    {
        $var = [];
        $req = $this->getDb()->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 3');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Chapter($data);
        }
        return $var;
        $req->closeCursor();
    }

    /**
     * Fonction qui récupère un chapitre en fonction de son ID
     *
     * @param [type] $id
     * @return new Chapter($data);
     */
    public function getChapter($id)
    {
        $req = $this->getDb()->prepare('SELECT id, title, content, author, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($id));
        $data = $req->fetch();
        return new Chapter($data);
        $req->closeCursor();
    }

    /**
     * Fonction pour insérer un nouveau chapitre dans la base de données
     *
     * @param [type] $title
     * @param [type] $author
     * @param [type] $content
     * @return return $insertChapter;
     */
    public function insertChapter($title, $author, $content)
    {
        $req = $this->getDb()->prepare('INSERT INTO posts(title, author, content, creation_date) VALUES (:title, :author, :content, NOW())');
        $insertChapter = $req->execute(array(
            'title' => $title,
            'author' => $author,
            'content' => $content
        ));
        return $insertChapter;
    }

}