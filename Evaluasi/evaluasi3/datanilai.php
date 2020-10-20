<?php
class connect{
    protected   $database = 'localhost',
                $user = 'widari',
                $password = '<thisismypass>';
                

    function __construct()
    {
        
        $this->connect = new PDO("mysql:host=$this->database;dbname=datanilai", $this->user, $this->password);
    }

    function showdata(){
        $perintah = "SELECT * FROM siswa";
        $show = $this->connect->prepare($perintah);
        $show->execute();
        $hasil = $show->fetchALL(pdo::FETCH_ASSOC);
        print_r($hasil);
        }

    function inputdata(){
        echo "=========================\n";
        echo "Masukkan nama siswa : ";
        $nama = trim(fgets(STDIN));
        echo "=========================\n";
        echo "Masukkan nilai siswa : ";
        $nilai = (int)fgets(STDIN);
        echo "=========================\n";
        echo "Masukkan divisi siswa : ";
        $divisi = (int)fgets(STDIN);
        echo "=========================\n";
        $query = "INSERT INTO siswa (nama, nilai,divisi) VALUES ('$nama', '$nilai','$divisi');";
        $eks = $this->connect->prepare($query);
        $eks->execute();
        $this->showdata();
        }

    function count(){
        echo "=========================\n";
        $perintah = "SELECT COUNT(nama) FROM siswa";
        $count = $this->connect->prepare($perintah);
        $count->execute();
        $hasil = $count->fetchALL(pdo::FETCH_ASSOC);
        print_r($hasil);
    }

    function average(){
        echo "=========================\n";
        $perintah = "SELECT AVG(nilai) FROM siswa";
        $count = $this->connect->prepare($perintah);
        $count->execute();
        $hasil = $count->fetchALL(pdo::FETCH_ASSOC);
        print_r($hasil);
    }

    function potensi(){
        echo "=========================\n";
        $perintah = "SELECT nama FROM siswa WHERE siswa.nilai>=80";
        $count = $this->connect->prepare($perintah);
        $count->execute();
        $hasil = $count->fetchALL(pdo::FETCH_ASSOC);
        print_r($hasil);
    }
    }

function masuk(){
$conn = new connect();
echo "\n";
echo "--->>INPUT DATA PARA SANTRI<<---               \n";
echo "'a' = untuk input data                         \n";
echo "'b' = untuk menghitung seluruh data            \n";
echo "'c' = untuk menghitung nilai rata-rata santri  \n";
echo "'d' = untuk mencari santri berpotensi          \n";
echo "'e' = untuk melihat santri dengan nilai <= 65  \n";
echo "Silahkan masukkan pilihan : ";
$input = (int)fgets(STDIN);

    if ($input == "a"){
        $conn->inputdata();
    }if ($input == "b"){
        $conn->count();
    }if ($input == "c"){
        $conn->average();
    }if ($input == "d"){
        $conn->potensi();
    }
    
    }

masuk();
?>