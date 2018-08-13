<?php
session_start();

require_once('views/View.php');

class ControllerContact {

    private $_contactManager;
    private $_view;

    /**
     * Constructeur ou l'on controle qu'il n'y est pas plusieurs paramètre dans l'URL 
     * et on affiche une exception si c'est le cas
     * sinon on lance la fonction contact
     *
     * @param [type] $url
     */
    public function __construct($url)
    {
        if(isset($url) && count($url) > 1)
        {
            echo "Error 404";
        }
        else
        {
            $this->contact();
        }
    }

    /**
     * Fonction qui affiche la vue de la page contact
     *
     */
    private function contact()
    {
        $this->_view = new View('Contact');
        $this->_view->generate(array());
    }

}