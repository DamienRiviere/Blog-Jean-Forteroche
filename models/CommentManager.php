<?php

class CommentManager extends Model {

   /**
    * Fonction pour insérer des commentaires dans la base de données
    *
    * @param [type] $id
    * @param [type] $title
    * @param [type] $author
    * @param [type] $comment
    * @return $insertComment;
    */
    public function insertComment($id, $title, $author, $comment)
    {
        $req = $this->getDb()->prepare('INSERT INTO comments(id_post, title_post, author, comment, date_comment) VALUES (:id_post, :title_post, :author, :comment, NOW())');
        $insertComment = $req->execute(array(
            'id_post' => $id,
            'title_post' => $title,
            'author' => $author,
            'comment' => $comment
        ));
        return $insertComment;
    }

    /**
     * Fonction pour récupérer les commentaires d'un chapitre avec son id
     *
     * @param [type] $id
     * @return $var;
     */
    public function getComments($id)
    {
        $var = [];
        $req = $this->getDb()->prepare('SELECT id, id_post, author, comment, DATE_FORMAT(date_comment, \'%d/%m/%Y à %Hh%imin%ss\') AS date_comment_fr, DATE_FORMAT(date_modification, \'%d/%m/%Y à %Hh%imin%ss\') AS date_modification_fr, check_comment FROM comments WHERE id_post = ? ORDER BY date_comment');
        $req->execute(array($id));
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Comment($data);
        }
        return $var;
        $req->closeCursor();
    }

    /**
     * Fonction pour récupérer un commentaire via son id
     *
     * @param [type] $id
     * @return new Comment($data);
     */
    public function getComment($id)
    {
        $req = $this->getDb()->prepare('SELECT id, id_post, author, comment, DATE_FORMAT(date_comment, \'%d/%m/%Y à %Hh%imin%ss\') AS date_comment_fr, check_comment FROM comments WHERE id = ?');
        $req->execute(array($id));
        $data = $req->fetch();
        return new Comment($data);
        $req->closeCursor();
    }

    /**
     * Fonction pour supprimer un commentaire
     *
     * @param [type] $id
     * @return $deleteComment;
     */
    public function deleteComment($id)
    {
        $req = $this->getDb()->prepare('DELETE FROM comments WHERE id = ?');
        $deleteComment = $req->execute(array($id));
        return $deleteComment;
    }

    /**
     * Fonction pour mettre à jour un commentaire
     *
     * @param [type] $id
     * @param [type] $comment
     * @return $updateComment;
     */
    public function updateComment($id, $comment)
    {
        $req = $this->getDb()->prepare('UPDATE comments SET comment = :newcomment, date_modification = NOW() WHERE id =' . $id);
        $updateComment = $req->execute(array(
            'newcomment' => $comment
        ));
        return $updateComment;
    }

    /**
     * Fonction pour approuver un commentaire
     *
     * @param [type] $id
     * @return $confirmeComment;
     */
    public function confirmeComment($id)
    {
        $req = $this->getDb()->prepare('UPDATE comments SET check_comment = 1 WHERE id = ?');
        $confirmeComment = $req->execute(array($id));
        return $confirmeComment;
    }

}