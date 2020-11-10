<?php
$user = "widari";
$pass = "<thisismypass>";
$dbhs = "localhost";
$dbnm = "Sprint4";

$conn = new PDO("mysql:host=$dbhs;dbname=$dbnm", $user, $pass);
if (!$conn) {
    echo "gagal konek=" . mysql_error();
}
