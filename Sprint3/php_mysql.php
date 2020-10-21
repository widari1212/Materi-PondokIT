<?php 

    $server = "localhost";
    $user = "widari";
    $pass ="<thisismypass>";
    $dbname = "PONDOKIT";

try{
    $conn =new PDO("mysql:host=$server;dbname=$dbname;",$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE orders(
        id int(6) AUTO_INCREMENT PRIMARY KEY,
        firstname varchar(30),
        lastname varchar(30),
        email varchar(50))";
      
      $conn->exec($sql);
      echo "Table created successfull";


}catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}
