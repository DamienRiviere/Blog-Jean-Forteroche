<?php

class AuthenticationManager extends Model {

    /**
     * Fonction qui récupère les informations d'un utilisateur
     *
     * @param [type] $emailConnect
     * @return $checkUser
     */
    public function checkUser($emailConnect)
    {
        $req = $this->getDb()->prepare('SELECT id, pseudo, pass, email FROM members WHERE email = :email');
        $req->execute(array(
            'email' => $emailConnect
        ));
        $checkUser = $req->fetch();
        return $checkUser;
    }

}