<?php
session_start();
class Logout{
    public function logout(){
        session_destroy();
        return header("location:user_login.php");

    }
}
$logout = new Logout();
$logout->logout();