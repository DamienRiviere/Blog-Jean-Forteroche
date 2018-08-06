<?php
session_start();

class ControllerDisconnection {

    /**
     * Constructeur ou l'on controle qu'il n'y est pas plusieurs paramètre dans l'URL 
     * et on affiche une exception si c'est le cas
     * sinon on lance la fonction de déconnexion
     *
     * @param [type] $url
     */
    public function __construct($url)
    {
        if(isset($url) && count($url) > 1)
        {
            throw new Exception('Page introuvable');
        }
        else if(isset($_GET['url']) == 'disconnection')
        {
            $this->disconnection();
        }
    }

    /**
     * Fonction qui sert à un utilisateur pour se déconnecter
     *
     */
    public function disconnection()
    {
        session_start();
        $_SESSION = array();
        session_destroy();
        header("Location: home");
    }

}