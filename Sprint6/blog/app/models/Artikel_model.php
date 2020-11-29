<?php

class Artikel_model {

  private $table = 'blog';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }


  //method untuk ngambil data
  public function getAllArtikel()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getArtikelById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $bind = $this->db->bind('id', $id);
    $fetch = $this->db->single();
    return $fetch;
  }

  public function tambahDataArtikel($data)
  {
    $query = "INSERT INTO blog
                VALUES 
                (NULL, :author, :title, :content)";

    $this->db->query($query);
    $this->db->bind('author', $data['author']);
    $this->db->bind('title', $data['title']);
    $this->db->bind('content', $data['content']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function hapusDataArtikel($id)
  {
    $query = "DELETE FROM blog WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function ubahDataArtikel($data)
  {
    $query = "UPDATE blog SET author = :author, title = :title, content = :content WHERE id = :id";


    $this->db->query($query);
    $this->db->bind('author', $data['author']);
    $this->db->bind('title', $data['title']);
    $this->db->bind('content', $data['content']);
    $this->db->bind('id', $data['id']);
  
    $this->db->execute();

    return $this->db->rowCount();
    // return 0;
  }

  public function cariDataArtikel()
  {
    $keyword =$_POST['keyword'];
    $query = "SELECT * FROM blog WHERE author LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }

}