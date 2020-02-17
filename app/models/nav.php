<?php

namespace app\models;
use app\config\DB;

class nav {
    private $database;

    public function __construct(DB $database){
        $this->database = $database;
    }
    public function getNav(){
        return $this->database->executeQuery("select * from navigacija");
    }
}