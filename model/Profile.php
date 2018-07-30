<?php
namespace Openclassrooms\Projet_4\Model;

require_once("Manager.php");

class Profile extends Manager {

    /**
     * Fonction pour afficher le profil de l'utilisateur en fonction de son id
     *
     * @param [type] $getId
     * @return $userProfile
     */
    public function getProfile($getId) {
        $db = $this->dbConnect();
        $users = $db->prepare('SELECT * FROM members WHERE id = ?');
        $users->execute(array($getId));
        $userProfile = $users->fetch();
        return $userProfile;
    }

}