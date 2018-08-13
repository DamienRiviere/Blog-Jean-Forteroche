<?php
session_start();

require_once('views/View.php');

class ControllerChapter {
    
    private $_chapterManager;
    private $_view;

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
        else if(isset($_GET['id']))
        {
            $this->id = $_GET['id'];
            $this->checkId($this->id);
        }
    }

    /**
     * Fonction ou l'on vérifie que le chapitre existe via son Id
     *
     * @param [type] $id
     */
    public function checkId($id)
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

        $this->_view = new View('Chapter');
        $this->_view->generate(array('chapter' => $chapter));
    }

}