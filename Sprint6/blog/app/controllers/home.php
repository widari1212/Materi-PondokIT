<?php


class Home extends Controller {
  public function index()
  {
    if( isset($_SESSION['username']) )
    {
      header("Location:" . BASEURL . "/artikel/index" );
      exit;
    }


    $data['judul'] = 'Login';
    $data['art'] = $this->model('User_model')->getUser($_POST);
    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }
  public function register()
  {
    if(isset($_POST['submit'])){
      if ($this->model('User_model')->takeData($_POST) > 0) {
        Message::setFlash('Berhasil', 'didaftarkan!', 'success');
        header('Location: ' . BASEURL);
        exit;
      } else {
        Message::setFlash('Gagal', 'didaftar!', 'danger');
        header('Location: ' . BASEURL);
        exit;
      }
    }
    
  }

  public function logout()
  {
    $this->view('logout/logout');
    header("Location:" . BASEURL );
  }
}