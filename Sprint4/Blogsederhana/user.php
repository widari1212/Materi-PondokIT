<?php
require_once('login.php'); 
$login = new Login(); 

if (isset($_SESSION['status'])) { 
    header('Location: profile.php'); 
} else { 


    ?>
    <h3><a href="index.php">Home</a></h3>
    <hr>
    <h1>User Session Login</h1>
    <form action="#" method="post">
        <label for="">Username</label>
        <input type="text" name="username">
        <label for="">Password</label>
        <input type="password" name="password">
        <input type="submit" name="submit" value="Login">
    </form>

<?php
}
$login->login();  
?>