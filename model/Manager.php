<?php
namespace Openclassrooms\Projet_4\Model;

class Manager {

    /**
     * Fonction pour se connecter à la base de donnée
     *
     * @return $db
     */
    protected function dbConnect() {
        $db = new \PDO('mysql:host=localhost;dbname=projet_4;charset=utf8', 'root', '');
        return $db;
    }

}