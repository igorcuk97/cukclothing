<?php

namespace app\controllers;
use app\models\proizvodJedan;
use app\models\nav;

class ProductController extends Controller {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function productOne($id){
        $modelProizvod = new proizvodJedan($this->db);
        $proizvod = $modelProizvod->getOnajJedanProizvod($id);
        $slike =  $modelProizvod->dofatiFotkiceJedan($id);
        $boje =  $modelProizvod->dozoviBojeSve($id);
        //$model2=new nav(DB::instance());
        //$items2 = $model2->getNav();
        $this->loadView("singleitem", ['proizvod'=>$proizvod, 'slike'=>$slike, 'boje'=>$boje]);
    }

}