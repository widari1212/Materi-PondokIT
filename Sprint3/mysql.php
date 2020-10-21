<?php
$servername = "localhost";
$username = "widari";
$password = "<thisismypass>";

try {
    $conn = new PDO("mysql:host=$servername;dbname=PONDOKIT", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>