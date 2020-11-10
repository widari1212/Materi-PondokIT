<?php
session_start();
if (!isset($_SESSION['username'])) header('location:login.php');

require_once "app/Blog.php";

// var_dump($_GET['id']);

if (isset($_GET['id'])) {
    $blog = new Blog();
    $edit = $blog->edit($_GET['id']);
    $edit = $edit->fetch(PDO::FETCH_OBJ);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    <div class="add-article">
        <form method="POST">
            <label for="judul">Title</label>
            <input type="hidden" name="id" value="<?= $edit->id; ?>">
            <input type="text" name="title" placeholder="Judul" value="<?= $edit->title; ?>">
            <label for="isi">content</label>
            <textarea name="content" cols="65%" rows="10" autofocus><?= $edit->content; ?></textarea>
            <input type="submit" name="Edit" value="Edit">
        </form>

    </div>
</body>

</html>




<?php

if (isset($_POST['Edit'])) {
    $id         = $_POST['id'];
    $title      = $_POST['title'];
    $content       = $_POST['content'];

    $updt       = new Blog();
    $update     = $updt->update($id, $title, $content);
    if ($update == "Success") {
        header('Location: category.php');
    }
}

?>