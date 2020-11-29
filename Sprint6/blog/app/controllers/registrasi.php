<?php

class Registrasi extends Controller
{
    public function index()
    {
        $data['judul'] = 'Registrasi';
        $this->view('templates/header', $data);
        $this->view('registrasi/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Registrasi';
        $this->model('User_model')->registrasi($_POST);
        $this->view('templates/header', $data);
        $this->view('registrasi/index', $data);
        $this->view('templates/footer');
    }
}
