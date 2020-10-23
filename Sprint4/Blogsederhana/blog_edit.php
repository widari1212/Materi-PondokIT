<?php
require_once('Blog.php');
$blog = new Blog();

$id = $_GET['id'];
$show = mysqli_query($blog->connect(),"SELECT * FROM blog WHERE id='$id'");
if(mysqli-mssql_num_rows($show)==0){
    echo 'Data tidak ditemukan';
}else{
    $data = mysqli_fetch_asoc($show);
}
?>
<h1>Edit Artikel</h1>
<form action="#" method="post">
    <label for="">Judul</label>
    <input type="text" name="title" value="<?php echo $data['title'];?>">
    <br>
    <label for="">Artiel</label>
    <textarea name="content" id="" cols="30" rows="10"><?php echo $data['content'];?></textarea>
    <br>
    <input type="submit" name="submit" value="Save">
</form>
<?php
$blog->blog_edit($id);
?>