<?php

class Database {
    
    // protected $db_host;
    // protected $db_name;
    // protected $db_user;
    // protected $db_pass;
    // protected $pdo;

    public function __construct(/*$db_host, $db_name, $db_user, $db_pass*/) {
        // $this->db_host = $db_host;
        // $this->db_name = $db_name;
        // $this->db_user = $db_user;
        // $this->db_pass = $db_pass;
        $this->getPDO();
    }

    private function getPDO() {

        // Récupération du contenu du fichier json et décodage de celui-ci
        try {
            $json = file_get_contents('./modele/pdo.json');
            $decode = json_decode($json, true);

            $pdo = new PDO("mysql:host=".$decode['host'].";dbname=".$decode['dbName'], $decode['user'], $decode['pass']);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $pdo->exec('SET NAMES utf8');
            var_dump($pdo);

        } catch (Exception $e) {

            die ('Erreur : '.$e->getMEssage());
        }

        return $this->pdo;
    }

}