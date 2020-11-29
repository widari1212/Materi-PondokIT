<?php

class Artikel extends Controller{
  public function index()
  {
    if( !isset($_SESSION['username']) )
    {
      header("Location:" . BASEURL . "/home/index" );
      exit;
    }

    $data['judul'] = 'Daftar Artikel';
    $data['art'] = $this->model('Artikel_model')->getAllArtikel();
    $this->view('templates/header', $data);
    $this->view('artikel/index', $data);
    $this->view('templates/footer');
  }

  public function detail($id)
  {
    if( !isset($_SESSION['username']) )
    {
      header("Location:" . BASEURL . "/home/index" );
      exit;
    }

    $data['judul'] = 'Detail Artikel';
    $data['art'] = $this->model('Artikel_model')->getArtikelById($id);
    $this->view('templates/header', $data);
    $this->view('artikel/detail', $data);
    $this->view('templates/footer');
  }

  public function tambah()
  {
    if( $this->model('Artikel_model')->tambahDataArtikel($_POST) > 0 ) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/artikel');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/artikel');
      exit;
    }
  }

  public function hapus($id)
  {
    if( $this->model('Artikel_model')->hapusDataArtikel($id) > 0 ) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/artikel');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/artikel');
      exit;
    }
  

 
  }

  public function getubah($id)
  {
    if( !isset($_SESSION['username']) )
    {
      header("Location:" . BASEURL . "/home/index" );
      exit;
    }
    
    $data['judul'] = 'Update Artikel';
    $data['art'] = $this->model('Artikel_model')->getArtikelById($id);
    $this->view('templates/header', $data);
    $this->view('artikel/update', $data);
    $this->view('templates/footer');
  }

  public function ubah()
  {
     if ( $this->model('Artikel_model')->ubahDataArtikel($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/public/artikel');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/public/artikel');
    }
  }

  public function cari()
  {
    $data['judul'] = 'Daftar Artikel';
    $data['art'] = $this->model('Artikel_model')->cariDataArtikel();
    $this->view('templates/header', $data);
    $this->view('artikel/index', $data);
    $this->view('templates/footer');
  }
   
}