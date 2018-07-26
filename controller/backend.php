<?php

require_once('model/Register.php');

use \Openclassrooms\Projet_4\Model\Register;

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
                                $error = "Votre compte a bien été créé !";
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