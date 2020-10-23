<?php
require_once('Blog.php');
$blog = new Blong();
$blog->blog->blog_delete($_GET['id']);
?>