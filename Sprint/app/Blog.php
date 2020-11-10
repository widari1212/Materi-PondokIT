<?php
class Blog
{
    public function __construct()
    {
        $user     = "widari";
        $host     = "localhost";
        $pass     = "<thisismypass>";
        $dbname   = "Sprint4";
        $this->db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass) or die("Tidak connect");
    }

    public function index()
    {
        $sql = "SELECT blog.id,blog.title,blog.content,blog.user_id,category.name,user.username
            FROM blog
            INNER JOIN user ON blog.user_id = user.id
            INNER JOIN category ON blog.category_id = category.id";
           
        $stmt = $this->db->prepare($sql);
        $stmt->execute(([]));
        return $stmt;
    }

    public function categoryBLog($id)
    {
        $sql = "SELECT blog.id,blog.title,blog.content,blog.user_id,category.name,user.username
            FROM blog
            INNER JOIN user ON blog.user_id = user.id
            INNER JOIN category ON blog.category_id = category.id
            WHERE id=$id ";

        $statement = $this->db->prepare($sql);
        $statement->execute(([$id]));
        return $statement;
    }


    public function create($title, $content, $user_id, $category_id)
    {
        $date = date('yy/m/d');
        $sql = "INSERT INTO blog (title,content,date,user_id,category_id)VALUES(?,?,?,?,?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(([$title, $content, $date, $user_id, $category_id]));

        if ($stmt) {
            var_dump("Success");
        }
        return "Failed";
    }

    public function read()
    {
        $sql = "SELECT * FROM blog";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $hasil[] = $stmt->fetchALL(pdo::FETCH_ASSOC);
        return $hasil;
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM blog WHERE id=$id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(([$id]));
        return $stmt;
    }

    public function update($id, $title, $content)
    {
        $sql = "UPDATE blog SET title ='$title', content = '$content' WHERE id='$id' ";
        $statement = $this->db->prepare($sql);
        $statement->execute(([$id, $title, $content]));
        // $statement->execute();
        if ($statement > 0) {
            return "Success";
        } else {
            return "Failed";
        }
    }

    public function delete($id)
    {
        return $id;
        $sql = "DELETE FROM blog WHERE id=$id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(([$id]));

        if ($stmt) {
            return "delete";
        }
        return die("delete failed");
    }

    public function register($username, $email, $password)
    {
        $sql       = "INSERT INTO user (username, email, password) VALUES (?, ?, ?)";
        $statement = $this->db->prepare($sql);
        $statement->execute(([$username, $email, $password]));
        if ($statement) {
            return "Success";
        } else {
            die();
        }
    }
}
