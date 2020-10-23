<?php 
    require_once('Blog.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Session Login</title>
</head>
<body>
    <?php
        if(isset($_SESSION['status'])){
            echo "<h3><a href='Profile.php'></a></h3>";

        }else{
            echo "<h3><a href='user_login.php'>Login</a></h3>";
        }
        ?>
            <hr>
            <?php
            $blog = new Blog();
            $blog->blog_index();
    ?>
</body>
</html>