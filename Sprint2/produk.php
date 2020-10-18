<?php
class produk{
    private $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $diskon = 0,
           $harga = 0;
          
     

public function __construct($judul,$penulis,$penerbit,$harga){
    $this->judul    = $judul;
    $this->penulis  = $penulis;
    $this->penerbit = $penerbit;
    $this->harga    = $harga;
}
public function setjudul($judul){
$this->judul = $judul;

}
public function getjudul(){
    return $this->judul;

}
public function setpenulis($penulis){
    $this->penulis=$penulis;
}

public function getpenulis(){
    return $this->penulis;
}
public function setpenerbit($penerbit){
    $this->penerbit=$penerbit;
}

public function getpenerbit(){
    return $this->penerbit;
}
public function setdiskon($diskon){
    $this->diskon=$diskon;
}   
public function getdiskon(){
   return  $this->diskon;
}   
    public function getharga(){
        return $this->harga - ($this->harga*$this->diskon/100);
    }

public function getlabel(){
    return "$this->penulis,$this->penerbit";

}
public function getinfoproduk(){
$str = "{$this->judul} | {$this->getlabel()}(Rp. {$this->harga})";

return $str;
}

}
class Komik extends produk{
    public $jmlhalaman;
    public function __construct($judul,$penulis,$penerbit,$harga,$jmlhalaman){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlhalaman=$jmlhalaman;
    }
    public function getinfoproduk(){
        $str = "Komik : ". parent::getinfoproduk()."-
        {$this->jmlhalaman} halaman.";
        return $str;

    }
}
class Game extends produk{
    public $waktumain;
    public function __construct($judul, $penulis, $penerbit, $harga, $waktumain){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktumain=$waktumain;
    }
    
   
    public function getinfoproduk(){
    $str = "Game : ".parent::getinfoproduk()."-
        {$this->waktumain} jam.";
        return $str;

    }
}
class cetakinfoproduk{
    public function cetak( produk $produk){
        $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
        return $str;
    }
}
$produk1 = new Komik("Naruto","Masahi khisimoto","Shonen Jump",30000,100);

$produk2 = new Game("Uncharted","Neil Druckmann","Sony Computer",25000,50);
echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();

echo "<hr>";
$produk2->setdiskon(40);
echo $produk2->getharga();
echo "<hr>";
// $produk1->setjudul("widari");
echo $produk1->getpenulis();


// echo "Komik : " . $produk1->getlabel();
// echo "<br>";
// echo "Game : " . $produk2->getlabel();
// echo "<br>";
// $infoproduk1 = new cetakinfoproduk();
// echo $infoproduk1->cetak($produk1);