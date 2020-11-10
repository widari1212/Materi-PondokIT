<?php

class User
{

    protected $host = 'localhost',
        $username = 'widari',
        $password = '<thisismypass>',
        $dbname = 'Sprint4';

    public $connect;

    function __construct()
    {
        $dbhost = $this->host;
        $dbname = $this->dbname;
        $this->connect = new PDO("mysql:host=$dbhost;dbname=$dbname", $this->username, $this->password);
        return $this->connect;
    }

    public function login($username, $password)
    {
            $db = $this->connect;
            $query = $db->prepare("SELECT * FROM user WHERE username=:username AND password=:password");
            $query->bindParam("username", $username, PDO::PARAM_STR);
            $query->bindParam("password", $password, PDO::PARAM_STR);
            $query->execute();
            $count = $query->execute();
            if ($count == true) {
                $result = $query->fetch(PDO::FETCH_OBJ);
                return $result->username;
            } else {
                return "failed";
            }
       
    }
}

$login = new User();
$login->login('widari', 'wida11');
