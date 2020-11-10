<?php

require_once "app/Blog.php";

?>
<style>
    body {
        background-image: url("img/vekt.jpeg");
        background-repeat: no-repeat, repeat;
        background-attachment: fixed;
        background-size: cover;
        margin: 40px auto;
        width: 65%;
    }

    form {

        border: 1px solid #f1f1f1;
        border-radius: 10px 10px;
        padding: 15px;
    }
</style>

<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
    <form style="width: 40%; float:right;" action="" method="POST">
        <div class="container">
            <div class="card-body">
                <form method="post" action="">
                    <h1 style="color: white;">Sign Up</h1>
                    <hr>
                    <div class="form-group">
                        <label style="color:white;" for="username"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label style="color:white;" for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label style="color:white;" for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label style="color:white;" for="psw-repeat"><b>Repeat Password</b></label>
                        <input type="password" placeholder="Repeat Password" name="password-repeat" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="regis" class="signupbtn" value="Register">
                        <input type="reset" class="cancelbtn" value="Reset">
                    </div>
                </form>
                <script type="text/javascript" src="bootstrap.min.js"></script>
            </div>
    </form>

    <?php if (isset($_POST['regis'])) {
        if ($_POST['password'] != $_POST['password-repeat']) { ?>
            <script>
                alert('Masukkan Password Yg Benar')
            </script>
    <?php } else {
            $user  = $_POST['username'];
            $pass  = $_POST['password'];
            $email = $_POST['email'];
            $blog  = new Blog();
            $stmt  = $blog->register($user, $email, $pass);

            if ($stmt == "Success") {
                header('Location: login.php');
            }
        }
    }
