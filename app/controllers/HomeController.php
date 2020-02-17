<?php

namespace app\controllers;
use app\config\DB;
use app\models\nav;
use app\models\proizvodi;

class HomeController extends Controller {

    public function home() {
        $model=new nav(DB::instance());

        $items = $model->getNav();

        $this->data["navigacija"]=$items;

        $model2=new proizvodi(DB::instance());
    
        $items2 = $model2->getNoviProizvodi1();
    
        $this->data["proizvodi1"]=$items2;

        $model3=new proizvodi(DB::instance());
    
        $items3 = $model3->getNoviProizvodi2();
    
        $this->data["proizvodi2"]=$items3;

        $model4=new proizvodi(DB::instance());
    
        $items4 = $model4->getNoviProizvodi3();
    
        $this->data["proizvodi3"]=$items4;

        $this->loadView("home", $this->data);
    }

    public function author() {
        $model=new nav(DB::instance());

        $items = $model->getNav();

        $this->data["navigacija"]=$items;

        $this->loadView("author", $this->data);
    }

    public function loginovanje() {
        $model=new nav(DB::instance());

        $items = $model->getNav();

        $this->data["navigacija"]=$items;

        $this->loadView("loginovanje", $this->data);
    }

    public function registration() {
        $model=new nav(DB::instance());

        $items = $model->getNav();

        $this->data["navigacija"]=$items;

        $this->loadView("registration", $this->data);
    }

    public function admin() {
        $model=new nav(DB::instance());

        $items = $model->getNav();

        $this->data["navigacija"]=$items;

        $this->loadView("admin", $this->data);
    }

    public function cart() {
        $model=new nav(DB::instance());

        $items = $model->getNav();

        $this->data["navigacija"]=$items;

        $this->loadView("cart", $this->data);
    }

    public function contact() {
        $model=new nav(DB::instance());

        $items = $model->getNav();

        $this->data["navigacija"]=$items;

        $this->loadView("contact", $this->data);
    }

    public function shop() {
        $model=new nav(DB::instance());

        $items = $model->getNav();

        $this->data["navigacija"]=$items;

        $model3=new proizvodi(DB::instance());
    
        $items3 = $model3->getBoje();
    
        $this->data["boje"]=$items3;

        $this->loadView("shop", $this->data);
    }

    public function shopGet($sort=null, $filter=null, $potrebno = 6){
        $model=new proizvodi(DB::instance());

        $items = $model->dofatiProizvode($sort, $filter, $potrebno);

        $this->json($items);
    }
    public function shopSingleGet(){
        $model=new proizvodi(DB::instance());

        $items = $model->dofatiProizvodSaSlikama();

        $this->json($items);
    }

}