<?php

namespace app\models;
use app\config\DB;

class proizvodi {
    private $database;

    public function __construct(DB $database){
        $this->database = $database;
    }
    public function getNoviProizvodi1(){
        return $this->database->executeQuery("select * from proizvodi order by DatumProizvoda DESC limit 0, 8");
    }
    public function getNoviProizvodi2(){
        return $this->database->executeQuery("select * from proizvodi order by DatumProizvoda DESC limit 8, 8");
    }
    public function getNoviProizvodi3(){
        return $this->database->executeQuery("select * from proizvodi where IDKategorije = 4");
    }
    public function getBoje(){
        return $this->database->executeQuery("select * from boje");
    }
    public function getKategorje(){
        return $this->database->executeQuery("select * from kategorije");
    }
    public function dofatiProizvode($sort = null, $filter = null, $potrebno = 6){
        $filter = (int) $filter;
        $proizvodiBrojimo = " limit ".$potrebno;
        if($filter!=0){
            $upit = "select * from boje b inner join bojeproizvodi bp
            on b.IDBoje=bp.IDBoje inner join proizvodi p
            on p.IDProizvoda=bp.IDProizvoda where b.IDBoje = ".$filter;
        } else {
            $upit = "select * from proizvodi";
        }
        switch($sort){
            case 'nazivAsc':
                return $this->database->executeQuery($upit." order by NazivProizvoda asc".$proizvodiBrojimo);
            break;
            case 'nazivDesc':
                return $this->database->executeQuery($upit." order by NazivProizvoda desc".$proizvodiBrojimo);
            break;
            case 'cenaAsc':
                return $this->database->executeQuery($upit." order by CenaProizvoda asc".$proizvodiBrojimo);
            break;
            case 'cenaDesc':
                return $this->database->executeQuery($upit." order by CenaProizvoda desc".$proizvodiBrojimo);
            break;
            case 'datumAsc':
                return $this->database->executeQuery($upit." order by DatumProizvoda asc".$proizvodiBrojimo);
            break;
            case 'datumDesc':
                return $this->database->executeQuery($upit." order by DatumProizvoda desc".$proizvodiBrojimo);
            break;
            default:
            return $this->database->executeQuery($upit.$proizvodiBrojimo);
            break;
        }
    }
 
}