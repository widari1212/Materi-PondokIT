<?php

session_start();
if (!isset($_SESSION['username'])) header("location:login.php");


require_once "app/Blog.php";

$blog  = new Blog;
$index = $blog->index();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


</head>

<body>
    <div class="card mt-3">
        <div style="text-align:center; " class="card-header bg-dark text-white">
            Daftar Artikel
        </div>
        <div class="card-body">
            <table class="table teble-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>User_ID</th>
                    <th>Category</th>
                    <th>Aksi</th>
                </tr>

                <?php 
                    $no=1;
                    while ($row = $index->fetch(PDO::FETCH_OBJ)) {
                        
                ?>

                    <tr>
                    
                        <td><?= $no++ ;?></td>
                        <td><?= $row->title; ?></td>
                        <td><?= $row->content; ?></td>
                        <td><?= $row->user_id; ?></td>
                        <td><?= $row->name; ?></td>



                        <td>
                            <a href="edit.php?id=<?= $row->id; ?>" class="btn btn-sm btn-primary">Edit</a> |
                            <a href="delete.php?id=<?= $row->id; ?>" class="btn btn-sm btn-warning">Delete</a>
                        </td>

                    </tr>

                <?php } ?>
            </table>
        </div>
    </div>
    <div class="card mt-3">
        <div style="text-align:center;" class="card-header bg-dark text-white">
            <a href="add.php" class="btn btn btn-success">Tambah Data</a>
            <a href="logout.php" class="btn btn btn-danger">Logout</a>


</html>