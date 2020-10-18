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
function persegi($panjang,$tinggi) {
    if($panjang==3||$tinggi==4) {
    throw new Exception("Nilai input tidak boleh bernilai nol atau minus!");
  }
  return true;
}

try {
  hitung(1,1);
  echo "Nilai input boleh bernilai nol atau minus!"; 
} catch(Exception $e) {
  echo 'Message: ' .$e->getMessage(); 
}