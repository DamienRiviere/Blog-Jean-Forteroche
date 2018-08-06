<?php
session_start();

require_once('views/View.php');

class ControllerProfile {

    private $_profileManager;
    private $_view;

    /**
     * Constructeur ou l'on controle qu'il n'y est pas plusieurs paramètre dans l'URL 
     * et on affiche une exception si c'est le cas
     * sinon on récupère le profil de l'utilisateur avec son id
     *
     * @param [type] $url
     */
    public function __construct($url)
    {
        if(isset($url) && count($url) > 1)
        {
            throw new Exception('<p>Page introuvable</p>');
        }
        else if (isset($_GET['url']) == 'profile')
        {
            if(isset($_GET['id']) && $_GET['id'] > 0 && $_GET['id'] = $_SESSION['id'])
            {
                $this->profile($_GET['id']);
            }
            else
            {
                throw new Exception('<p>Profil introuvable</p>');
            }
        }
    }

    /**
     * Fonction qui génère la vue, récupère les données du profil
     * et les envoies à la vue
     *
     * @param [type] $id
     */
    private function profile($id)
    {
        $this->_profileManager = new ProfileManager;
        $profile = $this->_profileManager->getProfile($id);

        $this->_view = new View('Profile');
        $this->_view->generate(array('profile' => $profile));
    }

}