<?php

class ProfileManager extends Model {

    /**
     * Fonction qui récupère un profile en fonction de son id
     *
     * @param [type] $id
     * @return return new Profile($data);
     */
    public function getProfile($id)
    {
        $req = $this->getDb()->prepare('SELECT * FROM members WHERE id = ?');
        $req->execute(array($id));
        $data = $req->fetch();
        return new Profile($data);
        $req->closeCursor();
    }

}