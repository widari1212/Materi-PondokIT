<?php
class Mahasiswa extends Controller{
    public function index()
    {
        $data['judul']='Daftar Mahasiswa';
        $data['mhs']= $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templetes/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templetes/footer');


    }
    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id); //nampilin seluruh data per id
        $this->view('templetes/header', $data);
        $this->view('mahasiswa/detail', $data); 
        $this->view('templetes/footer');
    }

    public function tambah()
    {

        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
            flasher::setFlash('berhasil', 'dihapus', 'warning');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
            flasher::setFlash('berhasil', 'diubah', 'primary');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->view('templetes/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templetes/footer');

    }
}



?>