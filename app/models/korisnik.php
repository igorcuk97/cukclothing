<?php

namespace app\models;
use app\config\DB;

class Korisnik{
    private $database;

    public function __construct(DB $database){
        $this->database = $database;
    }
    public function dodajKorisnika($username, $email, $password){
        $params = [$username, $email, $password];

        $query = "INSERT INTO osobe values(NULL, ?, ?, ?, 2)";

        $this->database->resiJedanRed($query, $params);
    }

    public function proveriKorisnika($usernameL, $passwordL){
        $data = $this->database->executeQuery("SELECT * FROM osobe WHERE usernameOsobe = '" . $usernameL. "'" . " AND passwdOsobe = '" .  md5($passwordL) . "'");
        
        if(!count($data)) {
            return null;
        }

        return $data[0];
    }
}