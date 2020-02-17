<?php

namespace app\models;
use app\config\DB;

class proizvodJedan {
    private $database;

    public function __construct(DB $database){
        $this->database = $database;
    }

    public function getOnajJedanProizvod($id){
        return $this->database->executeOneRow("select *
        from proizvodi p inner join kategorije k on p.IDKategorije=k.IDKategorije
        inner join slike s on s.IDProizvoda=p.IDProizvoda
        inner join bojeproizvodi bp on bp.IDProizvoda = p.IDProizvoda
        inner join boje b on b.IDBoje = bp.IDBoje
        where p.IDProizvoda = ?",[$id]);
    }

    public function dofatiFotkiceJedan($id){
        return $this->database->resiSamoJedan("select * from slike where IDProizvoda = ?",[$id]);
    }

    public function dozoviBojeSve($id){
        return $this->database->resiSamoJedan("select * from boje b inner join bojeproizvodi bp
        on b.IDBoje = bp.IDBoje where IDProizvoda = ?",[$id]);
    }
    
}