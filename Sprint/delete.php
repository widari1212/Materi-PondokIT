<?php
session_start();
if (!isset($_SESSION['username'])) header('location:login.php');

require_once "app/Blog.php";
$id = $_GET['id'];
$class = new Blog;
$stmt=$class->db->prepare("DELETE FROM blog WHERE  id=$id");
$stmt->execute();

header("location:category.php")
?>