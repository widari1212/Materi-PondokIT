<?php
require_once('Config.php'); 
session_start(); 
class Login extends Config 
{

    public function login() 
    {
        $error = 'User name atau Password Salah'; 
        if (isset($_POST['submit'])) {
            if (empty($_POST['name']) || empty($_POST['pass'])) { 
                echo $error; 
            } else { 
                $name = $_POST['name']; 
                $pass = $_POST['pass'];
                $login = mysqli_query($this->connect(), "SELECT name, password from login where name='$name' AND password='$pass' ");
                $cek = mysqli_num_rows($login);

                if ($cek > 0) { 
                    $_SESSION['name'] = $name; 
                    $_SESSION['status'] = "login"; 
                    return header("Location: profile.php"); 
                } else { 
                    echo $error; 
                }
            }
        }
    }
}
