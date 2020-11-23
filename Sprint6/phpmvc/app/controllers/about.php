<?php 
class About extends Controller{
    public function index($nama ='hohoh', $pekerjaan = 'ngoding terus sampai mampus', $umur = 20)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About me';
        $this->view('templetes/header', $data);
        $this->view('about/index', $data);
        $this->view('templetes/footer');
    }
    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('about/header', $data);
        $this->view('templetes/page');
        $this->view('templetes/footer');
    }
}

?>