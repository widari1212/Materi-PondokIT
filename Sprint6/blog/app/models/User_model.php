<?php
class User_model {

  private $table = 'user';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }


  public function getUser($data)
  {

      $email = $data['email'];
      $password = $data['password'];

      $query = "SELECT * FROM ". $this->table ." where email=:email AND password=:password"; 
      $this->db->query($query);
      $this->db->bind('email', $email);
      $this->db->bind('password', $password); 
      // var_dump($stmt);
  
       if( isset($_POST['submit'])) {
          $fetch = $this->db->single();
          if(empty($email) || empty($password)) {
            echo "<button class='btn btn-danger'> ISI DENGAN BENAR!!! <?button>";
          } else {
            $_SESSION['id'] = $fetch['id'];
            $_SESSION['username'] = $fetch['username'];
            // var_dump($_SESSION['username']);

            header("Location:" . BASEURL . "/artikel");
          }
          return $fetch;
        }

        
      
  }
  public function takeData($data)
  {
    $query = 'INSERT INTO '. $this->table .' VALUES (NULL, :username, :password, :email)';
    $username = $data['username'];
    $email = $data['email'];
    $password = $data['password1'];
    // $password2 = $data['password2'];

    
      $this->db->query($query);
      $this->db->bind('username', $username);
      $this->db->bind('email', $email);
      $this->db->bind('password', $password);
    // var_dump($email);

      $this->db->execute();
      return $this->db->rowCount();

    
  }
  public function logout()
  {
    session_start();
    session_unset();
    session_destroy();
    echo
      "<script>
            alert('Anda telah logout!');
            document.location.href='http://localhost/Materi-PondokIT/Sprint6/blog/public/home/'
            </script>";
  }

}