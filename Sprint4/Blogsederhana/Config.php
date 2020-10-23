<?php 

class Config {

    public function db(){
        $user = "widari";
        $pass = "<thisismypass>";
        $dbhs = "localhost";
        $dbnm = "app_pondok";

        $db = new PDO("mysql:host=$dbhs;dbname=$dbnm", $user, $pass);
        return $db;
    }
}
