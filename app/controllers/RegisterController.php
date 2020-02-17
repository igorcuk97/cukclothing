<?php

namespace app\controllers;
use app\models\korisnik;

class RegisterController extends Controller {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function register(){
        if(isset($_POST['register'])){

            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];

            $errors=[];

            $reUsername="/^[a-z]{2,25}$/";
            $rePassword="/^(?=.*\d).{6,}$/";

            }
            if(!preg_match($reUsername, $username)||empty($username)) {
                $errors[] = "Username nije dobar";
            }

            if(!preg_match($rePassword, $password)||empty($password)) {
                $errors[] = "Šifra nije dobra";
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)||empty($email)) {
                $errors[] = "Email nije dobar";
            }

            if(count($errors) == 0) {

                try {
                    $model = new korisnik($this->db);
                    $password = md5($password);
                    $model->dodajKorisnika($username, $email, $password);
                    http_response_code(201);
                }
                catch (\PDOException $ex) {
                    echo json_encode(['message'=> $ex->getMessage()]);
                    http_response_code(500);

                }

            }

        }
    }