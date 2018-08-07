<?php

class EditprofileManager extends Model {

    /**
     * Fonction qui met à jour le pseudo
     *
     * @param [type] $newPseudo
     * @param [type] $id
     */
    public function updatePseudo($newPseudo, $id)
    {
        $req = $this->getDb()->prepare('UPDATE members SET pseudo = ? WHERE id = ?');
        $req->execute(array($newPseudo, $id));
        $req->closeCursor();
    }

    /**
     * Fonction qui met à jour l'email
     *
     * @param [type] $newEmail
     * @param [type] $id
     */
    public function updateEmail($newEmail, $id)
    {
        $req = $this->getDb()->prepare('UPDATE members SET email = ? WHERE id = ?');
        $req->execute(array($newEmail, $id));
        $req->closeCursor();
    }

    /**
     * Fonction qui met à jour le mot de passe
     *
     * @param [type] $newPassword
     * @param [type] $id
     */
    public function updatePassword($newPassword, $id)
    {
        $req = $this->getDb()->prepare('UPDATE members SET pass = ? WHERE id = ?');
        $req->execute(array($newPassword, $id));
        $req->closeCursor();
    }

}