<?php
session_start();

spl_autoload_register(function($putanja){

    $putanja = str_replace("\\", DIRECTORY_SEPARATOR, $putanja);
    $putanja[0] = strtolower($putanja[0]);
    $putanja .= ".php";
    require_once $putanja;
});

function zabeleziPristupStranici(){
    $open = fopen("data/log.txt", "a");
    if($open){
        fwrite($open, "{$_SERVER["REQUEST_URI"]}\t{$_SERVER['REMOTE_ADDR']}  date: ". date("Y.m.d")."\n");
        fclose($open);
    }
}