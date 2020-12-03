<?php
require_once('app/Blog.php');

$blog = new Blog(); 
$blog->blog_delete($_GET['id']); 
