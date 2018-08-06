<?php
session_start();

require_once('views/View.php');

class ControllerHome {

    private $_chapterManager;
    private $_view;

    /**
     * Constructeur ou l'on controle qu'il n'y est pas plusieurs paramètre dans l'URL 
     * et on affiche une exception si c'est le cas
     * sinon on lance la fonction chapters
     *
     * @param [type] $url
     */
    public function __construct($url)
    {
        if(isset($url) && count($url) > 1)
        {
            throw new Exception('Page introuvable');
        }
        else
        {
            $this->chapters();
        }
    }

    /**
     * Fonction ou l'on récupère tous nos chapitres
     * puis on génère la vue
     *
     */
    private function chapters()
    {
        $this->_chapterManager = new ChapterManager;
        $chapters = $this->_chapterManager->getChaptersHome();

        $this->_view = new View('Home');
        $this->_view->generate(array('chapters' => $chapters));
    }

}