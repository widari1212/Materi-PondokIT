<?php 
if(isset($_COOKIE['username'])){
    header('location:barang.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="col-md-6">
    <form method="POST">
        <div class="form-group">
            <label for="Username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>   
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="Password" name="Password" class="form-control">
        </div>  
        <div class="form-group">
            <input type="submit" name="submit" value="Login" class="btn btn-primary">
        </div>
    </form>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
<?php
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    setcookie('username', $username, time()+3600,"/");
    setcookie('password', $password, time()+3600,"/");
    header('location:barang.php');
}
?>
