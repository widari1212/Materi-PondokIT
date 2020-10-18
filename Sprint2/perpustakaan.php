<?php
class Perpustakaan
{
public $Buku =
[ 
    [
        "ISBN" => 001,
        "Judul Buku" => "Cara Jitu Berhidroponik",
        "Jumlah" => 34
    ],
    [
        "ISBN" => 002,
        "Judul Buku" => "Baca Cepat AHE",
        "Jumlah" => 16
    ],
    [
        "ISBN" => 003,
        "Judul Buku" => "Berhitung Secepat Kilat",
        "Jumlah" => 28
    ]
];
public function peminjam($pinjem)
{
if ($pinjem == 0){
    echo "=====================\n";
    echo "buku yang anda pinjam =\n";
    $infobuku = $this->Buku[$pinjem]["Judul Buku"];
    print_r($infobuku);
    echo "\n";
    echo "jumlah sekarang = ";
    $satu = (int)1;
    $kurang = $this->Buku[$pinjem]["Jumlah"];
    $jml = $kurang - $satu;
    echo "\n";
}if($pinjem == 1){
    echo "=====================\n";
    echo "buku yang anda pinjam =\n";
    $infobuku = $this->Buku[$pinjem]["Judul Buku"];
    print_r($infobuku);
    echo "\n";
    echo "jumlah sekarang = ";
    $satu = (int)1;
    $kurang = $this->Buku[$pinjem]["Jumlah"];
    $jml = $kurang - $satu;
    print_r($jml);
    echo "\n";
}if($pinjem == 2){
    echo "=====================\n";
    echo "buku yang anda pinjam =\n";
    $infobuku = $this->Buku[$pinjem]["Judul Buku"];
    print_r($infobuku);
    echo "\n";
    echo "jumlah sekarang = ";
    $satu = (int)1;
    $kurang = $this->Buku[$pinjem]["Jumlah"];
    $jml = $kurang - $satu;
    print_r($jml);
    echo "\n";
}
}
public function kembalikan($balik)
{
if ($balik == 0){
    echo "=====================\n";
    echo "buku yang anda pinjam =\n";
    $infobuku = $this->Buku[$balik]["Judul Buku"];
    print_r($infobuku);
    echo "\n";
    echo "jumlah sekarang = ";
    $satu = (int)1;
    $kurang = $this->Buku[$balik]["Jumlah"];
    $jml = $kurang + $satu;
    print_r($jml);
    echo "\n";
}if($balik == 1){
    echo "=====================\n";
    echo "buku yang anda pinjam =\n";
    $infobuku = $this->Buku[$balik]["Judul Buku"];
    print_r($infobuku);
    echo "\n";
    echo "jumlah sekarang = ";
    $satu = (int)1;
    $kurang = $this->Buku[$balik]["Jumlah"];
    $jml = $kurang + $satu;
    print_r($jml);
    echo "\n";
}if($balik == 2){
    echo "=====================\n";
    echo "buku yang anda pinjam =\n";
    $infobuku = $this->Buku[$balik]["Judul Buku"];
    print_r($infobuku);
    echo "\n";
    echo "jumlah sekarang = ";
    $satu = (int)1;
    $kurang = $this->Buku[$balik]["Jumlah"];
    $jml = $kurang + $satu;
    print_r($jml);
    echo "\n";
}
}
}
function masuk(){
echo "Tekan 'a' untuk meminjam buku!\n";
echo "Tekan 'b' untuk mengembalikan buku!\n";
echo "Tekan 'x' untuk keluar!\n(x/y)?";
$data =trim(fgets(STDIN));
    if ($data == "a"){
        echo "Masuakan ISBN!\n";
            $isbn =trim(fgets(STDIN));
            $perpus = new Perpustakaan();
            $perpus->peminjam($isbn);
    }if($data == "b"){
        echo "Masukkan ISBN!\n";
        $isbn =trim(fgets(STDIN));
        $perpus = new Perpustakaan();
        $perpus->kembalikan($isbn);
    }if($data != "x" || $data != "y"){
        echo "____________\nTerimakasih\n____________\n\n";
    }
    masuk();
}
masuk();
?>
    
