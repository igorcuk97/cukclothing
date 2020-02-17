<?php

namespace app\controllers;

class Controller {

    protected $data;

    protected function loadView($view, $data = null) {
        require_once "app/views/fixed/head.php"; //head
        require_once "app/views/fixed/nav.php"; //navigacija i titl
        require_once "app/views/pages/".$view.".php"; //ovde prosledjujemo stranu koja se ucitava
        require_once "app/views/fixed/footer.php"; //futer
    }

    protected function redirect($page) {
        header("Location: " . $page);
    }

    protected function json($data = null, $statusCode = 200) {
        header("content-type: application/json");
        http_response_code($statusCode);
        echo json_encode($data);
    }

}