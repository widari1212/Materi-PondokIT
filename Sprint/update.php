<?php

session_start();

if (!isset($_SESSION['submit'])) {

    header('location:login.php');

    exit;
} 
require_once "core/init.php";

if (isset($_GET['id'])) {
    $blog = new Blog();
    $show = $blog->editBlog($_GET['id']);
    $edit = $show->fetch(PDO::FETCH_OBJ);
}



if (isset($_POST['updateBlog'])) {
    $id        = $_POST['id'];
    $title     = $_POST['title'];
    $content   = $_POST['content'];

    $updt = new Blog();
    $update = $updt->updateBlog($id, $title, $content);
    if ($update == "Success") {
        header('Location: add.php');
    }
    
}
