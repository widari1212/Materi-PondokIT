<?php
session_start();
require_once "app/Blog.php";

$blog = new Blog;
$index = $blog->index();
?>

<style>
    body {
        background-image: url("img/bg.jpg");
        background-repeat: no-repeat, repeat;
        background-attachment: fixed;
        background-size: cover;
        margin: 40px auto;
        width: 65%;
    }

    .row {
        background-color: #fff1;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


</head>

<body>

    <nav style="width:154%;" class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="register.php">
            <img src="img/regis.jpeg" width="20" height="30" class="d-inline-block align-top" alt=""> Registrasion
            <a class="navbar-brand" href="login.php">
                <img src="img/login.jpeg" width="30" height="30" class="d-inline-block align-top" alt=""> Login
            </a>
    </nav>