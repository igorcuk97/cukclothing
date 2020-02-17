<?php

namespace app\controllers;
use app\models\korisnik;

class LoginController extends Controller {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function login() {

        $errors = [];

        if(isset($_POST['login'])){
            if(!isset($_POST["usernameL"])) {
                array_push($errors, "Username mora biti unet.");
            }

            if(!isset($_POST["passwordL"])) {
                array_push($errors, "Šifra mora biti uneta.");
            }
            if(count($errors)) {
                $this->view('login', [
                    "errors" => $errors
                ]);
                exit;
            }

            try {
                $model = new korisnik($this->db);
                $user = $model->proveriKorisnika($_POST["usernameL"],$_POST["passwordL"]);

                if($user != null) {
                    $_SESSION["user"] = $user;
                    $_SESSION["uloga"] = $user->IDUloga;
                    $this->redirect("index.php?page=shop");
                }else{
                    $this->redirect("index.php?page=contact");
                }


            }catch(\PDOException $ex) {
                $this->redirect("index.php?page=loginovanje");

            }

        }
    }
    public function logout() {
        $_SESSION["user"] = null;
        $this->redirect("index.php?page=home");
    }

}
