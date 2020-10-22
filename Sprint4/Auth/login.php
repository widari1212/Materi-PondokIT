<?php
session_start();
if(isset($_SESSION["username"])) header("Location:profile.php");
$error = 'User name atau password salah';
if(isset($_POST['submit'])){
    if(empty($_POST['username'])||empty($_POST['password'])){
        echo $error;
    }else{
        $name = $_POST['username'];
        $pass = $_POST['password'];
        $conn = new PDO("mysql:host=localhost;dbname=login", 'widari', '<thisismypass>');
 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $login = mysqli_query($conn,"SELECT name,password from auth where name='$name'AND password='$pass'");

        $cek = mysqli_num_rows($login);

        if(isset($_POST['submit'])){
            $name     = $_POST['username'];
            $password = $_POST['password'];
    
            $_SESSION['username']     = $name;
            $_SESSION['password'] = $password;
    
            header('location:profile.php');
        }
    }
}