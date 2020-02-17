<?php

require_once "app/config/autoload.php";
require_once "app/config/database.php";

use app\controllers\HomeController as Home;
use app\controllers\RegisterController as Register;
use app\controllers\LoginController as Login;
use app\controllers\ProductController as Product;
use app\config\DB;

if(isset($_GET['page'])){
    switch($_GET['page']){
        case "home":
            $HomeController = new Home();
            $HomeController->home();
            break;
        case "author":
            $HomeController = new Home();
            $HomeController->author();
            break;
        case "loginovanje":
            $HomeController = new Home();
            $HomeController->loginovanje();
            break;
        case "login":
            $LoginController = new Login(DB::instance());
            $LoginController->login();
            break;
        case "logout":
            $LoginController = new Login(DB::instance());
            $LoginController->logout();
            break;
        case "registration":
            $HomeController = new Home();
            $HomeController->registration();
            break;
        case "register":
            $RegisterController = new Register(DB::instance());
            $RegisterController->register();
            break;
        case "admin":
            $HomeController = new Home();
            $HomeController->admin();
            break;
        case "cart":
            $HomeController = new Home();
            $HomeController->cart();
            break;
        case "contact":
            $HomeController = new Home();
            $HomeController->contact();
            break;
        case "shop":
            $HomeController = new Home();
            $HomeController->shop();
            break;
        case "shopGet":
            $HomeController = new Home();
            if(isset($_GET['sort']) && isset($_GET['filter']))
            $HomeController->shopGet($_GET['sort'], $_GET['filter'], $_GET['potrebno']);
            else
            $HomeController->shopGet();
            break;
        case "shopSingleGet":
            $HomeController = new Home();
            $HomeController->shopSingleGet();
            break;
        case "singleitem":
            if(isset($_GET['id'])){
                $ProductController = new Product(DB::instance());
                $ProductController->productOne($_GET['id']);
            }else{
                $HomeController = new Home();
                $HomeController->home();
            }
            break;
    }
} else {
    $HomeController = new Home();
    $HomeController->home();
}