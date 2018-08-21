<?php
session_start();

require_once('views/View.php');

class ControllerComment {

    private $_chapterManager;
    private $_commentManager;
    private $_view;

    protected $id;
    protected $id_post;

    public function __construct($url)
    {
        if(isset($url) && count($url) > 1)
        {
            echo "Error 404";
        }
        else if(isset($_GET['url']) == 'confirmecomment' AND isset($_GET['id_post']) AND !empty($_SESSION) AND $_SESSION['slug'] == 'admin' AND $_SESSION['level'] == '2')
        {
            $this->id = $_GET['id'];
            $this->id_post = $_GET['id_post'];
            $this->confirmeComment($this->id, $this->id_post);
        }
        else if(isset($_GET['url']) == 'deletecomment' AND isset($_GET['id_post']) AND !empty($_SESSION) AND $_SESSION['slug'] == 'admin' AND $_SESSION['level'] == '2')
        {
            $this->id = $_GET['id'];
            $this->id_post = $_GET['id_post'];
            $this->deleteComment($this->id, $this->id_post);
        }
        else if(isset($_GET['url']) == 'comment' AND isset($_GET['id']) AND !empty($_SESSION) AND $_SESSION['slug'] == 'admin' AND $_SESSION['level'] == '2')
        {
            $this->id = $_GET['id'];
            $this->comment($this->id);
        }
        else
        {
            throw New Exception('Page introuvable !');
        }
    }
   
    public function comment($id)
    {
        $this->_chapterManager = new ChapterManager;
        $chapter = $this->_chapterManager->getChapter($id);

        $this->_commentManager = new CommentManager;
        $comments = $this->_commentManager->getComments($id);

        $this->_view = new View('Comment');
        $this->_view->generate(array(
            'chapter' => $chapter,
            'comments' => $comments
        ));
    }

    
    /**
     * Fonction pour supprimer un commentaire
     *
     * @param [type] $id
     * @param [type] $id_post
     */
    private function deleteComment($id, $id_post)
    {
        if(!empty($_SESSION) AND $_SESSION['slug'] == 'admin' AND $_SESSION['level'] == '2')
        {
            $this->_commentManager = new CommentManager;
            $deleteComment = $this->_commentManager->deleteComment($id_post);
            header('Location: comment&id=' . $id);
        }
        else
        {
            throw New Exception('Suppression du commentaire impossible !');
        }
    }

    /**
     * Fonction pour approuver un commentaire
     *
     * @param [type] $id
     * @param [type] $id_post
     */
    private function confirmeComment($id, $id_post)
    {
        if(!empty($_SESSION) AND $_SESSION['slug'] == 'admin' AND $_SESSION['level'] == '2')
        {
            $this->_commentManager = new CommentManager;
            $this->_commentManager->confirmeComment($id_post);
            header('Location: comment&id=' . $id);
        }
        else
        {
            throw New Exception('Impossible d\'approuver le commentaire !');
        }  
    }

}