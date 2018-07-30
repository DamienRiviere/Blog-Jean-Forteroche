<?php

require_once('model/Register.php');
require_once('model/Connection.php');

use \Openclassrooms\Projet_4\Model\Register;
use \Openclassrooms\Projet_4\Model\Connection;

/**
 * Fonction qui vérifie les données envoyés à l'inscription
 *
 */
function checkRegister() {

    $register = new Register();
    
    if (isset($_POST['submit'])) 
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = $_POST['password'];
        $cPassword = $_POST['cpassword'];
        $email = htmlspecialchars($_POST['email']);

        if (!empty($pseudo) AND !empty($password) AND !empty($cPassword) AND !empty($email)) 
        {
            $pseudolength = strlen($pseudo);

            if($pseudolength <= 255) 
            {
                $checkPseudo = $register->checkPseudo($pseudo);

                if($checkPseudo == 0)
                {
                    if(filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        $checkEmail = $register->checkEmail($email);
                        
                        if($checkEmail == 0) 
                        {
                            if($password == $cPassword)
                            {
                                $pass_hache = password_hash($password, PASSWORD_DEFAULT);
                                $insertMembers = $register->newAccount($pseudo, $pass_hache, $email);
                                $error = "Votre compte a bien été créé ! <a href=\"index.php?action=connection\">Me connecter</a>";
                            }
                            else
                            {
                                $error = "Vos mots de passes ne correspondent pas !";
                            }
                        }
                        else
                        {
                            $error = "Adresse mail déjà utilisée !";
                        }
                    }
                    else
                    {
                        $error = "Votre adresse mail n'est pas valide !";
                    }
                }
                else
                {
                    $error = "Pseudo déjà utilisé !";
                }
            }
            else 
            {
                $error = "Votre pseudo ne doit pas dépasser 255 caractères !";
            }
        }
        else 
        {
            $error = "Tous les champs doivent être complétés !";
        }
        
    }   

    require('view/frontend/registerView.php');
}

/**
 * Fonction qui vérifie les données à la connection
 *
 */
function checkConnection() {

    $connection = new Connection();

    if(isset($_POST['formconnection'])) {

        $emailConnect = htmlspecialchars($_POST['emailconnect']);
        $passwordConnect = $_POST['passwordconnect'];

        if(!empty($emailConnect) AND !empty($passwordConnect))
        {
            if(filter_var($emailConnect, FILTER_VALIDATE_EMAIL))
            {
                $checkUser = $connection->checkUser($emailConnect);
                $checkPass = password_verify($passwordConnect, $checkUser['pass']);

                if($checkPass)
                {
                    $_SESSION['id'] = $checkUser['id'];
                    $_SESSION['pseudo'] = $checkUser['pseudo'];
                    $_SESSION['email'] = $checkUser['email'];
                    header("Location: index.php?action=profile&id=" . $_SESSION['id']);
                }
                else
                {
                    $error = "Mauvais identifiant ou mot de passe !";
                }
            }
            else
            {
                $error = "Votre adresse mail n'est pas valide !";
            }
        }
        else
        {
            $error = "Tous les champs doivent être complétés !";
        }

    }

    require('view/frontend/connectionView.php');

}

/**
 * Fonction pour se déconnecter de son profil
 *
 */
function disconnection() {
    session_start();
    $_SESSION = array();
    session_destroy();
    header("Location: index.php");
}

/**
 * Fonction pour éditer son profil
 *
 * @return void
 */
function editProfile() {
    
    if(isset($_SESSION['id']))
    {

    }
    else
    {
        header("Location: index.php?action=connection");
    }

    require('view/frontend/editProfileView.php');
}