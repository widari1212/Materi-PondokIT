<?php
class Hitung{
    public static function persegi(){
        echo "=======================\n";
        echo "Masukkan panjang!\n";
        $panjang = trim(fgets(STDIN));
        echo "=======================\n";
        echo "Masukkan tinggi!\n";
        $tinggi = trim(fgets(STDIN));
        echo "=======================\n\n\n";
        echo "Luas Persegi : ".$panjang*$tinggi." meter\n";
        echo "Keliling Persegi : ".(($panjang+$tinggi)*2)." meter\n";
    }
}

 hitung::persegi();