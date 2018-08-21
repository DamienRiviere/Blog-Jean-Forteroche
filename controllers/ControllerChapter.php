<?php
session_start();

require_once('views/View.php');

class ControllerChapter {
    
    private $_chapterManager;
    private $_view;
    private $_commentManager;

    protected $id;
    protected $id_post;
    protected $author;
    protected $comment;

    public $error;

    /**
     * Constructeur ou l'on controle qu'il n'y est pas plusieurs paramètre dans l'URL 
     * et on affiche une exception si c'est le cas
     * sinon on lance la fonction chapter
     *
     * @param [type] $url
     */
    public function __construct($url)
    {
        if(isset($url) && count($url) > 1)
        {
            echo "Error 404";
        }
        else if(isset($_GET['url']) == 'chapter')
        {
            if(isset($_POST['submit']))
            {
                $this->checkComment();
            }
            else
            {
                $this->id = $_GET['id'];
                $this->checkId($this->id);
            }
        }
    }

    /**
     * Fonction ou l'on vérifie que le chapitre existe via son Id
     *
     * @param [type] $id
     */
    private function checkId($id)
    {
        $this->_chapterManager = new ChapterManager;
        $checkChapterId = $this->_chapterManager->checkChapterId($id);

        if($checkChapterId == 0)
        {
            throw New Exception('Chapitre introuvable !');
        }
        else
        {
            $this->chapter($id);
        }
    }

    /**
     * Fonction ou l'on récupère le chapitre en fonction de son id
     *
     * @param [type] $id
     */
    private function chapter($id)
    {
        $this->_chapterManager = new ChapterManager;
        $chapter = $this->_chapterManager->getChapter($id);

        $this->_commentManager = new CommentManager;
        $comments = $this->_commentManager->getComments($id);

        $this->_view = new View('Chapter');
        $this->_view->generate(array(
            'chapter' => $chapter,
            'comments' => $comments
        ));
    }

    /**
     * Fonction ou on controle le commentaire et on l'envoie dans la base de données
     *
     */
    private function checkComment()
    {
        if(!empty($_POST['comment']))
        {
            $this->author = $_SESSION['pseudo'];
            $this->id = $_GET['id'];
            $this->comment = htmlspecialchars($_POST['comment']);

            $this->_chapterManager = new ChapterManager;
            $chapter = $this->_chapterManager->getChapter($this->id);

            $this->_commentManager = new CommentManager;
            $this->_commentManager->insertComment($this->id, $chapter->title(), $this->author, $this->comment);
            $this->chapter($this->id);
        }
    }

}