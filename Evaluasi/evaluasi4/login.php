<?php

require_once "app/User.php";

$app = new User;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">My Blog</h1>
        <h5 class="text-center">@widari121</h5>
        <div class="card mt-3">
            <div class="card-header bg-primary text-pink">
                Form Login
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="">UserName</label>
                        <input type="text" name="username" class="form-control" placeholder="Input Username Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Input Password Anda" required>
                    </div>
                    <button type="submit" class="btn btn-success" name="submit">Login</button>
                    <button type="reset" class="btn btn-danger" name="reset">Reset</button>

                </form>
                <?php
                if (isset($_POST['submit'])) {

                    $username = trim($_POST['username']);
                    $password = trim($_POST['password']);

                    if ($username == "") {
                        $login_error_message = 'Username field is required!';
                    } else if ($password == "") {
                        $login_error_message = 'Password field is required!';
                    } else {
                        $nama = $app->login($username, $password); // check user login
                        if ($username == $nama) {
                            $_SESSION['username'] = $username; // Set Session
                            header("Location: create.php"); // Redirect user to the profile.php
                        } else {
                            $login_error_message = 'Invalid login details!';
                        }
                    }
                }

                ?>


            </div>
        </div>
    </div>
    <script type="text/javascript" src="bootstrap.min.js"></script>
</body>

</html>