<?php
session_start();

require_once('views/View.php');

class ControllerNewchapter {

    private $_view;
    private $_chapterManager;

    protected $title;
    protected $content;
    protected $author;

    public $error;

    /**
     * Constructeur ou l'on controle qu'il n'y est pas plusieurs paramètre dans l'URL 
     * et on affiche une exception si c'est le cas
     * sinon on lance la fonction new chapter
     *
     * @param [type] $url
     */
    public function __construct($url)
    {
        if(isset($url) && count($url) > 1)
        {
            throw new Exception('Page introuvable');
        }
        else if(isset($_POST['submit']))
        {
            $this->_chapterManager = new ChapterManager;
            $this->checkChapter();
            $this->newChapter();
        }
        else
        {
            $this->newChapter();
        }
    }

    /**
     * Fonction qui génère la vue de la page de publication d'un article
     *
     */
    public function newChapter()
    {
        $this->_view = new View('Newchapter');
        $this->_view->generate(array('error' => $this->error));
    }

    /**
     * Fonction qui controle les champs et insert le chapitre dans la base de données
     *
     */
    public function checkChapter()
    {
        if(isset($_POST['chapter_title']) AND !empty($_POST['chapter_title']) AND isset($_POST['chapter_content']) AND !empty($_POST['chapter_title']))
        {
            $this->title = $_POST['chapter_title'];
            $this->author = $_SESSION['pseudo'];
            $this->content = $_POST['chapter_content'];

            $this->_chapterManager->insertChapter($this->title, $this->author, $this->content);
            $this->error = "Votre chapitre a été publié !";
        }
        else
        {
            $this->error = "Veuillez remplir tous les champs !";
        } 
    }

}