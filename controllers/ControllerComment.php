<?php
session_start();

require_once('views/View.php');

class ControllerComment {

    private $_chapterManager;
    private $_commentManager;
    private $_view;

    protected $id;

    public function __construct($url)
    {
        if(isset($url) && count($url) > 1)
        {
            echo "Error 404";
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
   
    /**
     * Fonction qui affiche les commentaires d'un chapitre via l'id
     *
     * @param [type] $id
     */
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

}