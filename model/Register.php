<?php
namespace Openclassrooms\Projet_4\Model;

require_once("Manager.php");

class Register extends Manager {

    /**
     * Fonction pour insérer les données d'un nouveau compte dans la base de données
     *
     * @param [type] $pseudo, $pass_hache, $email
     * @return $insertMembers
     */
    public function newAccount($pseudo, $pass_hache, $email) {
        $db = $this->dbConnect();
        $members = $db->prepare('INSERT INTO members(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
        $insertMembers = $members->execute(array(
            'pseudo' => $pseudo,
            'pass' => $pass_hache,
            'email' => $email
        ));
        return $insertMembers;
    }

    /**
     * Fonction pour vérifier à l'inscription que l'email n'est pas déjà utilisé
     *
     * @param [type] $email
     * @return $checkEmail
     */
    public function checkEmail($email) {
        $db = $this->dbConnect();
        $numberEmail = $db->prepare('SELECT * FROM members WHERE email = ?');
        $numberEmail->execute(array($email));
        $checkEmail = $numberEmail->rowCount();
        return $checkEmail;
    }

    /**
     * Fonction pour vérifier à l'inscription que le pseudo n'est pas déjà utilisé
     *
     * @param [type] $pseudo
     * @return $checkPseudo
     */
    public function checkPseudo($pseudo) {
        $db = $this->dbConnect();
        $numberPseudo = $db->prepare('SELECT * FROM members WHERE pseudo = ?');
        $numberPseudo->execute(array($pseudo));
        $checkPseudo = $numberPseudo->rowCount();
        return $checkPseudo;
    }
}