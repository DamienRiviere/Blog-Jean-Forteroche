<?php
session_start();

require_once('views/View.php');

class ControllerEditprofile {

    private $_view;
    private $_editprofileManager;

    protected $newPseudo;
    protected $newPassword;
    protected $newcPassword;
    protected $newEmail;

    public $error;

    /**
     * Constructeur ou l'on controle qu'il n'y est pas plusieurs paramètre dans l'URL 
     * et on affiche une exception si c'est le cas
     * sinon on lance la fonction d'édition du profil
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
            $this->_editprofileManager = new EditprofileManager;
            $this->checkNewProfile();
        }
        else if(isset($_SESSION['id']))
        {
            $this->editProfile();
        }
        else
        {
            throw new Exception('<p>Profil introuvable</p>');
        }
    }

    /**
     * Fonction qui génère la vue de la page
     *
     */
    public function editProfile()
    {
        $this->_view = new View('Editprofile');
        $this->_view->generate(array('error' => $this->error));
    }

    /**
     * Fonction qui vérifie les nouvelles informations du profil
     *
     */
    public function checkNewProfile()
    {
        if(isset($_POST['newPseudo']) AND !empty($_POST['newPseudo']) AND $_POST['newPseudo'] != $_SESSION['pseudo'])
        {
            $this->newPseudo = htmlspecialchars($_POST['newPseudo']);
            $this->_editprofileManager->updatePseudo($this->newPseudo, $_SESSION['id']);
            $_SESSION['pseudo'] = $_POST['newPseudo'];
            header('Location: profile&id=' . $_SESSION['id']);
        }
        else
        {
            $this->error = "Le pseudo est identique ou vide !";
        }

        if(isset($_POST['newEmail']) AND !empty($_POST['newEmail']) AND $_POST['newEmail'] != $_SESSION['email'])
        {
            $this->newEmail = htmlspecialchars($_POST['newEmail']);
            $this->_editprofileManager->updateEmail($this->newEmail, $_SESSION['id']);
            $_SESSION['email'] = $_POST['newEmail'];
            header('Location: profile&id=' . $_SESSION['id']);
        }
        else
        {
            $this->error = "L'adresse email est identique ou vide !";
        }

        if(isset($_POST['newPassword']) AND !empty($_POST['newPassword']) AND isset($_POST['newcPassword']) AND !empty($_POST['newcPassword']))
        {
            $this->newPassword = htmlspecialchars($_POST['newPassword']);
            $this->newcPassword = htmlspecialchars($_POST['newcPassword']);

            if($this->newPassword == $this->newcPassword)
            {
                $pass_hache = password_hash($this->newPassword, PASSWORD_DEFAULT);
                $this->_editprofileManager->updatePassword($pass_hache, $_SESSION['id']);
                header('Location: profile&id=' . $_SESSION['id']);
            }
            else
            {
                $this->error = "Vos deux mot de passe ne correspondent pas !";
            }
        }

        $this->editProfile();

    }

}
