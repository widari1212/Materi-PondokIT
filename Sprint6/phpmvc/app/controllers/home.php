<?php 
class Home extends Controller{
    public function index()
    {
      $data['judul']= 'Home';
      $data['nama'] = $this->model('User_model')->getUser();
      $this->view('templetes/header', $data);
      $this->view('home/index', $data);
      $this->view('templetes/footer');
// echo "home/index";


    }
}
?>