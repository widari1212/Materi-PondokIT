<?php
session_start();
if (!isset($_SESSION['username'])) header("location:login.php");
require_once "app/Blog.php";

$blog = new Blog;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
    <div class="card mt-3">
        <div class="card-header bg-primary text-white">
            Add Data
        </div>
        <div class="card-body">
            <form method="post" action="">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title" required>
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <input type="text" name="content" class="form-control" placeholder="content" required>
                </div>
                <div class="form-group">
                    <label for="">User_ID</label>
                    <input type="number" name="user_id" class="form-control" placeholder="userID" required>
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category_id" id="">
                        <option value="">Pilih</option>
                        <option value="1">Pribadi</option>
                        <option value="2">Otoritas</option>
                        <option value="3">Perusahaan</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success" name="submit">Upload</button>
                <button type="reset" class="btn btn-danger" name="reset">Reset</button>

            </form>
            <?php

            if (isset($_POST['submit'])) {
                $title = $_POST['title'];
                $content = $_POST['content'];
                $user_id = $_POST['user_id'];
                $category_id = $_POST['category_id'];

                $blog->create($title, $content, $user_id, $category_id);

                if ($blog) {
                    header("location:category.php");
                }
            }
            ?>
</body>
<script type="text/javascript" src="bootstrap.min.js"></script>

</html>