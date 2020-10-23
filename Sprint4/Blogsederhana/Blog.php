<?php
require_once('Config.php');
session_start();
class Blog extends Config{
    public function blog_index(){
        $data= "SELECT*FROM  blog";
        $blogs = $this->connect()->query($data);
        ?>
        <h1><i>Artikel Kita</i></h1>
        <?php
        if($blogs->num_rows>0){
            while($blog=$blogs->fetch_assoc()){
                ?>
                    <div style="border: 1px solid #000; padding: 5%; margin-top: 3%">
                    <h3><?= $blog['title'] ?></h3> //menampilkan title artikel
                    <hr>
                    <p><?php echo $blog['content'] ?></p> //menampilkan isi dari artikel 
                    <br>
                    <small>
                        penulis : <i><?php echo $blog['author'] ?></i> || <i><?php echo $blog['date'] ?></i> //menampilkan penulis
                <?php 
            if(isset($_SESSION['status'])){
                ?>
                || <a style="color:red;" href="blog_delete.php?id=<?php echo $blog['id']; ?>">Delete</a> //delete 
                || <a href="blog_edit.php?id=<?php echo $blog['id'];?>" style="color:green;" href="">Edit</a>//Edit
                <?php
            }
            ?>
            </small>
            </div>
            <?php
            }
        }else{
            echo '<h2>Tidak ada Artikel</h2>';
        }
    }
    public function blog_create(){
        if(isset($_SESSION['satus'])){
            ?>
            <h1>Buat Artikel</h1>
            <br>
            <hr>
            <form action="#"method="post">
                <label for="">judul</label>
                <input type="text"name="title">
                <br>
                <label for="">Artikel</label>
                <textarea name="content" id="" cols="30" rows="10"></textarea>
                <br>
                <input type="submit"name="submit"value="submit">
                
            </form>
            <?php
        if(isset($_POST['submit'])){
            $title = $_POST['title'];
            $content = $_POST['content'];
            $author = $_POST['author'];
            $date = date['date'];

            $insert = "INSERT INTO blog (title,content,author,date)VALUES('$title','$content','$author','$date')";
            if($this->connect()->query($insert)===TRUE){
                echo "Berhasi Menambah Artikel";
            }else{
                echo "Error:",$insert."<br>".$this->connect()->error;
            }
            $this->connect()->close();
        }
        }else{
         echo "Silahkan Login Terlebih Dahulu";
         echo '<a href="index.php">Login</a>';   

        }
    }
    public function blog_delete($id){
        $sql="DELETE FROM blog WHERE id=$id";
        if(mysqli_query($this->connect(),$sql)){
            return header('location:index.php');

    }else{
        echo "Error deleting record:".mysql_error($this->connnect());
    }
}
public function blog_edit($id){
    if(isset($_POST['simpan'])){

        $title = $_POST['title'];
        $content = $_POST['content'] ;
        $sql="UPDATE blog SET title='$title',content='$content' WHERE id='$id'";

        if(mysql_query($this->content(),$sql)){
            header('location:index.php');
        }else{
            echo "Error Edit record:".mysql_error($this->content());
        }
    }
}
}
