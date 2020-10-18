<?php
interface infoproduk{
  public function getinfoproduk();
}
abstract class produk{
    protected $judul = "judul",
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
abstract public function getinfo();


}
class Komik extends produk implements infoproduk{
    public $jmlhalaman;
    public function __construct($judul,$penulis,$penerbit,$harga,$jmlhalaman){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlhalaman=$jmlhalaman;
    }
    public function getinfo(){
        $str = "{$this->judul} | {$this->getlabel()}(Rp. {$this->harga})";
        
        return $str;
        }
    public function getinfoproduk(){
        $str = "Komik : ". $this->getinfo()."-
        {$this->jmlhalaman} halaman.";
        return $str;

    }
}
class Game extends produk implements infoproduk{
    public $waktumain;
    public function __construct($judul, $penulis, $penerbit, $harga, $waktumain){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktumain=$waktumain;
    }
    
    public function getinfo(){
        $str = "{$this->judul} | {$this->getlabel()}(Rp. {$this->harga})";
        
        return $str;
        }
    public function getinfoproduk(){
    $str = "Game : ".$this->getinfo()."-
        {$this->waktumain} jam.";
        return $str;

    }
}
class cetakinfoproduk{
    public $daftarproduk=[];
    public function tambahproduk(produk $produk){
        $this->daftarproduk[]=$produk;
    }

    public function cetak( ){
        $str = "DAFTAR PRODUK : <br>";
        foreach($this->daftarproduk as $p){
          $str .="-{$p->getinfoproduk()}<br>"; 
        }
        return $str;
    }
}
$produk1 = new Komik("Naruto","Masahi khisimoto","Shonen Jump",30000,100);

$produk2 = new Game("Uncharted","Neil Druckmann","Sony Computer",25000,50);
$cetakproduk = new cetakinfoproduk();
$cetakproduk->tambahproduk($produk1);
$cetakproduk->tambahproduk($produk2);
echo $cetakproduk->cetak();
