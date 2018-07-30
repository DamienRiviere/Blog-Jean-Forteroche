<?php
namespace Openclassrooms\Projet_4\Model;

require_once("Manager.php");

class Connection extends Manager {

    /**
     * Fonction qui récupère les informations d'un utilisateur
     *
     * @param [type] $emailConnect
     * @return $checkUser
     */
    public function checkUser($emailConnect) {
        $db = $this->dbConnect();
        $users = $db->prepare('SELECT id, pseudo, pass FROM members WHERE email = :email');
        $users->execute(array(
            'email' => $emailConnect
        ));
        $checkUser = $users->fetch();
        return $checkUser;
    }

}